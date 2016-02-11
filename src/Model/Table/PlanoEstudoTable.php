<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlanoEstudo Model
 *
 * @property \App\Model\Table\SegmentosTable|\Cake\ORM\Association\BelongsTo $Segmentos
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\CronogramasTable|\Cake\ORM\Association\HasMany $Cronogramas
 *
 * @method \App\Model\Entity\PlanoEstudo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlanoEstudo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlanoEstudo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlanoEstudo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlanoEstudo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlanoEstudo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlanoEstudo findOrCreate($search, callable $callback = null, $options = [])
 */
class PlanoEstudoTable extends Table
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

        $this->setTable('plano_estudo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Segmentos', [
            'foreignKey' => 'segmento_id'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Cronogramas', [
            'foreignKey' => 'plano_estudo_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmpty('descricao');

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
        $rules->add($rules->existsIn(['segmento_id'], 'Segmentos'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
