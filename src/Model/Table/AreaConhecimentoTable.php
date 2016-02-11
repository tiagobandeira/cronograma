<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaConhecimento Model
 *
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\HasMany $Materias
 *
 * @method \App\Model\Entity\AreaConhecimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreaConhecimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreaConhecimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreaConhecimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreaConhecimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreaConhecimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreaConhecimento findOrCreate($search, callable $callback = null, $options = [])
 */
class AreaConhecimentoTable extends Table
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

        $this->setTable('area_conhecimento');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Materias', [
            'foreignKey' => 'area_conhecimento_id'
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
            ->scalar('extensao')
            ->maxLength('extensao', 255)
            ->allowEmpty('extensao');

        return $validator;
    }
}
