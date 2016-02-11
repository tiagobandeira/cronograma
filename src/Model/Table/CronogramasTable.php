<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cronogramas Model
 *
 * @property \App\Model\Table\PlanoEstudoTable|\Cake\ORM\Association\BelongsTo $PlanoEstudo
 * @property \App\Model\Table\PeriodosTable|\Cake\ORM\Association\HasMany $Periodos
 *
 * @method \App\Model\Entity\Cronograma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cronograma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cronograma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cronograma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cronograma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cronograma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cronograma findOrCreate($search, callable $callback = null, $options = [])
 */
class CronogramasTable extends Table
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

        $this->setTable('cronogramas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('PlanoEstudo', [
            'foreignKey' => 'plano_estudo_id'
        ]);
        $this->hasMany('Periodos', [
            'foreignKey' => 'cronograma_id'
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->allowEmpty('titulo');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmpty('descricao');

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
        $rules->add($rules->existsIn(['plano_estudo_id'], 'PlanoEstudo'));

        return $rules;
    }
}
