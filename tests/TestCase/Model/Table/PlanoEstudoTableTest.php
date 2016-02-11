<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanoEstudoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanoEstudoTable Test Case
 */
class PlanoEstudoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanoEstudoTable
     */
    public $PlanoEstudo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plano_estudo',
        'app.segmentos',
        'app.conteudos',
        'app.temas',
        'app.disciplinas',
        'app.materias',
        'app.area_conhecimento',
        'app.hora_estudo',
        'app.usuarios',
        'app.cronogramas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PlanoEstudo') ? [] : ['className' => PlanoEstudoTable::class];
        $this->PlanoEstudo = TableRegistry::get('PlanoEstudo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlanoEstudo);

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
