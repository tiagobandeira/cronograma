<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cronograma Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property \Cake\I18n\FrozenDate $data_inicial
 * @property \Cake\I18n\FrozenDate $data_final
 * @property int $plano_estudo_id
 *
 * @property \App\Model\Entity\PlanoEstudo $plano_estudo
 * @property \App\Model\Entity\Periodo[] $periodos
 */
class Cronograma extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'data_inicial' => true,
        'data_final' => true,
        'plano_estudo_id' => true,
        'plano_estudo' => true,
        'periodos' => true
    ];
}
