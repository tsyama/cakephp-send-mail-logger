<?php
use Migrations\AbstractMigration;

class CreateSendMailLogs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('send_mail_logs');
        $table->addColumn('to_address', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('from_address', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('cc_address', 'string', [
            'default' => null,
            'limit' => 1000,
            'null' => true,
        ]);
        $table->addColumn('bcc_address', 'string', [
            'default' => null,
            'limit' => 1000,
            'null' => true,
        ]);
        $table->addColumn('subject', 'string', [
            'default' => null,
            'limit' => 1000,
            'null' => true,
        ]);
        $table->addColumn('message', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
