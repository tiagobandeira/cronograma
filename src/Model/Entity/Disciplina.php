<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disciplina Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $materia_id
 *
 * @property \App\Model\Entity\Materia $materia
 * @property \App\Model\Entity\Tema[] $temas
 */
class Disciplina extends Entity
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
        'descricao' => true,
        'materia_id' => true,
        'materia' => true,
        'temas' => true
    ];
}
