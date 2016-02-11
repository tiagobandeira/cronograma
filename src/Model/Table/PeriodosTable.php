<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodos Model
 *
 * @property \App\Model\Table\CronogramasTable|\Cake\ORM\Association\BelongsTo $Cronogramas
 * @property \App\Model\Table\HoraEstudoTable|\Cake\ORM\Association\HasMany $HoraEstudo
 *
 * @method \App\Model\Entity\Periodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Periodo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Periodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Periodo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo findOrCreate($search, callable $callback = null, $options = [])
 */
class PeriodosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('periodos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cronogramas', [
            'foreignKey' => 'cronograma_id'
        ]);
        $this->hasMany('HoraEstudo', [
            'foreignKey' => 'periodo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmpty('nome');

        $validator
            ->date('data_inicial')
            ->allowEmpty('data_inicial');

        $validator
            ->date('data_final')
            ->allowEmpty('data_final');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cronograma_id'], 'Cronogramas'));

        return $rules;
    }
}
