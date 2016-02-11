<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CronogramasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CronogramasController Test Case
 */
class CronogramasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cronogramas',
        'app.plano_estudo',
        'app.segmentos',
        'app.conteudos',
        'app.temas',
        'app.disciplinas',
        'app.materias',
        'app.area_conhecimento',
        'app.hora_estudo',
        'app.usuarios',
        'app.periodos'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
