<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaConhecimentoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaConhecimentoTable Test Case
 */
class AreaConhecimentoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaConhecimentoTable
     */
    public $AreaConhecimento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.area_conhecimento',
        'app.materias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaConhecimento') ? [] : ['className' => AreaConhecimentoTable::class];
        $this->AreaConhecimento = TableRegistry::get('AreaConhecimento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaConhecimento);

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
}
