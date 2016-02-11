<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conteudos Model
 *
 * @property \App\Model\Table\SegmentosTable|\Cake\ORM\Association\BelongsTo $Segmentos
 * @property \App\Model\Table\TemasTable|\Cake\ORM\Association\BelongsTo $Temas
 *
 * @method \App\Model\Entity\Conteudo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conteudo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conteudo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conteudo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conteudo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conteudo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conteudo findOrCreate($search, callable $callback = null, $options = [])
 */
class ConteudosTable extends Table
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

        $this->setTable('conteudos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Segmentos', [
            'foreignKey' => 'segmento_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmpty('nome');

        $validator
            ->scalar('nota')
            ->maxLength('nota', 255)
            ->allowEmpty('nota');

        $validator
            ->scalar('video')
            ->allowEmpty('video');

        $validator
            ->scalar('livro')
            ->allowEmpty('livro');

        $validator
            ->scalar('apostila')
            ->allowEmpty('apostila');

        $validator
            ->scalar('wiki')
            ->allowEmpty('wiki');

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
        $rules->add($rules->existsIn(['tema_id'], 'Temas'));

        return $rules;
    }
}
