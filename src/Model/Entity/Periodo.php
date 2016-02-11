<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Periodo Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenDate $data_inicial
 * @property \Cake\I18n\FrozenDate $data_final
 * @property int $cronograma_id
 *
 * @property \App\Model\Entity\Cronograma $cronograma
 * @property \App\Model\Entity\HoraEstudo[] $hora_estudo
 */
class Periodo extends Entity
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
        'nome' => true,
        'data_inicial' => true,
        'data_final' => true,
        'cronograma_id' => true,
        'cronograma' => true,
        'hora_estudo' => true
    ];
}
