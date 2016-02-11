<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tema Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $disciplina_id
 *
 * @property \App\Model\Entity\Disciplina $disciplina
 * @property \App\Model\Entity\Conteudo[] $conteudos
 * @property \App\Model\Entity\HoraEstudo[] $hora_estudo
 */
class Tema extends Entity
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
        'disciplina_id' => true,
        'disciplina' => true,
        'conteudos' => true,
        'hora_estudo' => true
    ];
}
