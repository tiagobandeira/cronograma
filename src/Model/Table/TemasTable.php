<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Temas Model
 *
 * @property \App\Model\Table\DisciplinasTable|\Cake\ORM\Association\BelongsTo $Disciplinas
 * @property \App\Model\Table\ConteudosTable|\Cake\ORM\Association\HasMany $Conteudos
 * @property \App\Model\Table\HoraEstudoTable|\Cake\ORM\Association\HasMany $HoraEstudo
 *
 * @method \App\Model\Entity\Tema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tema findOrCreate($search, callable $callback = null, $options = [])
 */
class TemasTable extends Table
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

        $this->setTable('temas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Disciplinas', [
            'foreignKey' => 'disciplina_id'
        ]);
        $this->hasMany('Conteudos', [
            'foreignKey' => 'tema_id'
        ]);
        $this->hasMany('HoraEstudo', [
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmpty('nome');

        $validator
            ->scalar('descricao')
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
        $rules->add($rules->existsIn(['disciplina_id'], 'Disciplinas'));

        return $rules;
    }
}
