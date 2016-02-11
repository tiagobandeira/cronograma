<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materia Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $area_conhecimento_id
 *
 * @property \App\Model\Entity\AreaConhecimento $area_conhecimento
 * @property \App\Model\Entity\Disciplina[] $disciplinas
 * @property \App\Model\Entity\HoraEstudo[] $hora_estudo
 */
class Materia extends Entity
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
        'area_conhecimento_id' => true,
        'area_conhecimento' => true,
        'disciplinas' => true,
        'hora_estudo' => true
    ];
}
