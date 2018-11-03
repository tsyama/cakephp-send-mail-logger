<?php

namespace SendMailLogger;

use Cake\ORM\TableRegistry;

class Email extends \Cake\Mailer\Email
{
    public function send($content = null)
    {
        $content = parent::send($content);

        $sendMailLogsTable = TableRegistry::get('SendMailLogs');
        $mailLog = $sendMailLogsTable->newEntity();
        $mailLog->to_address = implode($this->getTo());
        $mailLog->from_address = implode($this->getFrom());
        $mailLog->cc_address = implode($this->getCc());
        $mailLog->bcc_address = implode($this->getBcc());
        $mailLog->subject = mb_decode_mimeheader($this->getSubject());
        $mailLog->message = implode("\n", $this->_message);
        $mailLog->created = date('Y-m-d H:i:s', time());
        $sendMailLogsTable->save($mailLog);

        return $content;
    }
}
