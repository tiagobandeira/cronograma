<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SegmentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SegmentosTable Test Case
 */
class SegmentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SegmentosTable
     */
    public $Segmentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.segmentos',
        'app.conteudos',
        'app.plano_estudo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Segmentos') ? [] : ['className' => SegmentosTable::class];
        $this->Segmentos = TableRegistry::get('Segmentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Segmentos);

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
