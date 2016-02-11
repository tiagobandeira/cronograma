<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HoraEstudoFixture
 *
 */
class HoraEstudoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'hora_estudo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nota' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'hora_inicial' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'hora_fim' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'semana' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'materia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'periodo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tema_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_hora_estudo_materias1_idx' => ['type' => 'index', 'columns' => ['materia_id'], 'length' => []],
            'fk_hora_estudo_periodos1_idx' => ['type' => 'index', 'columns' => ['periodo_id'], 'length' => []],
            'fk_hora_estudo_temas1_idx' => ['type' => 'index', 'columns' => ['tema_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_hora_estudo_materias1' => ['type' => 'foreign', 'columns' => ['materia_id'], 'references' => ['materias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_hora_estudo_periodos1' => ['type' => 'foreign', 'columns' => ['periodo_id'], 'references' => ['periodos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_hora_estudo_temas1' => ['type' => 'foreign', 'columns' => ['tema_id'], 'references' => ['temas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet',
            'nota' => 'Lorem ipsum dolor sit amet',
            'hora_inicial' => '21:51:09',
            'hora_fim' => '21:51:09',
            'semana' => 1,
            'materia_id' => 1,
            'periodo_id' => 1,
            'tema_id' => 1
        ],
    ];
}
