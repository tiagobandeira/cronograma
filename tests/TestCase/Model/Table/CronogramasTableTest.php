<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CronogramasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CronogramasTable Test Case
 */
class CronogramasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CronogramasTable
     */
    public $Cronogramas;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cronogramas') ? [] : ['className' => CronogramasTable::class];
        $this->Cronogramas = TableRegistry::get('Cronogramas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cronogramas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
