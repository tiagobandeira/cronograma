<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlanoEstudo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $segmento_id
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Segmento $segmento
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Cronograma[] $cronogramas
 */
class PlanoEstudo extends Entity
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
        'segmento_id' => true,
        'usuario_id' => true,
        'segmento' => true,
        'usuario' => true,
        'cronogramas' => true
    ];
}
