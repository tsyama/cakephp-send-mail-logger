<?php
namespace SendMailLogger\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use SendMailLogger\Model\Table\SendMailLogsTable;

/**
 * SendMailLogger\Model\Table\SendMailLogsTable Test Case
 */
class SendMailLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \SendMailLogger\Model\Table\SendMailLogsTable
     */
    public $SendMailLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.send_mail_logger.send_mail_logs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SendMailLogs') ? [] : ['className' => SendMailLogsTable::class];
        $this->SendMailLogs = TableRegistry::getTableLocator()->get('SendMailLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SendMailLogs);

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
