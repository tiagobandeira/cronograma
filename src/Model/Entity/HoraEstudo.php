<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HoraEstudo Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $nota
 * @property \Cake\I18n\FrozenTime $hora_inicial
 * @property \Cake\I18n\FrozenTime $hora_fim
 * @property int $semana
 * @property int $materia_id
 * @property int $periodo_id
 * @property int $tema_id
 *
 * @property \App\Model\Entity\Materia $materia
 * @property \App\Model\Entity\Periodo $periodo
 * @property \App\Model\Entity\Tema $tema
 */
class HoraEstudo extends Entity
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
        'nota' => true,
        'hora_inicial' => true,
        'hora_fim' => true,
        'semana' => true,
        'materia_id' => true,
        'periodo_id' => true,
        'tema_id' => true,
        'materia' => true,
        'periodo' => true,
        'tema' => true
    ];
}
