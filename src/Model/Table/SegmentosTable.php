<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Segmentos Model
 *
 * @property \App\Model\Table\ConteudosTable|\Cake\ORM\Association\HasMany $Conteudos
 * @property \App\Model\Table\PlanoEstudoTable|\Cake\ORM\Association\HasMany $PlanoEstudo
 *
 * @method \App\Model\Entity\Segmento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Segmento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Segmento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Segmento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Segmento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Segmento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Segmento findOrCreate($search, callable $callback = null, $options = [])
 */
class SegmentosTable extends Table
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

        $this->setTable('segmentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Conteudos', [
            'foreignKey' => 'segmento_id'
        ]);
        $this->hasMany('PlanoEstudo', [
            'foreignKey' => 'segmento_id'
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
}
