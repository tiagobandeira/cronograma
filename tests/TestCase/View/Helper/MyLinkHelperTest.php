<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\MyLinkHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\MyLinkHelper Test Case
 */
class MyLinkHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\MyLinkHelper
     */
    public $MyLink;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->MyLink = new MyLinkHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MyLink);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
