<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conteudo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $nota
 * @property string $video
 * @property string $livro
 * @property string $apostila
 * @property string $wiki
 * @property int $segmento_id
 * @property int $tema_id
 *
 * @property \App\Model\Entity\Segmento $segmento
 * @property \App\Model\Entity\Tema $tema
 */
class Conteudo extends Entity
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
        'nota' => true,
        'video' => true,
        'livro' => true,
        'apostila' => true,
        'wiki' => true,
        'segmento_id' => true,
        'tema_id' => true,
        'segmento' => true,
        'tema' => true
    ];
}
