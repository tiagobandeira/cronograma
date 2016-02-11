<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HoraEstudo Model
 *
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsTo $Materias
 * @property \App\Model\Table\PeriodosTable|\Cake\ORM\Association\BelongsTo $Periodos
 * @property \App\Model\Table\TemasTable|\Cake\ORM\Association\BelongsTo $Temas
 *
 * @method \App\Model\Entity\HoraEstudo get($primaryKey, $options = [])
 * @method \App\Model\Entity\HoraEstudo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HoraEstudo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HoraEstudo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HoraEstudo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HoraEstudo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HoraEstudo findOrCreate($search, callable $callback = null, $options = [])
 */
class HoraEstudoTable extends Table
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

        $this->setTable('hora_estudo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Materias', [
            'foreignKey' => 'materia_id'
        ]);
        $this->belongsTo('Periodos', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->belongsTo('Temas', [
            'foreignKey' => 'tema_id'
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
            ->scalar('nota')
            ->maxLength('nota', 255)
            ->allowEmpty('nota');

        $validator
            ->time('hora_inicial')
            ->allowEmpty('hora_inicial');

        $validator
            ->time('hora_fim')
            ->allowEmpty('hora_fim');

        $validator
            ->integer('semana')
            ->allowEmpty('semana');

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
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));
        $rules->add($rules->existsIn(['periodo_id'], 'Periodos'));
        $rules->add($rules->existsIn(['tema_id'], 'Temas'));

        return $rules;
    }
}
