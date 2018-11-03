<?php
namespace SendMailLogger\Model\Entity;

use Cake\ORM\Entity;

/**
 * SendMailLog Entity
 *
 * @property int $id
 * @property string $to_address
 * @property string $from_address
 * @property string $cc_address
 * @property string $bcc_address
 * @property string $subject
 * @property string $message
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class SendMailLog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'to_address' => true,
        'from_address' => true,
        'cc_address' => true,
        'bcc_address' => true,
        'subject' => true,
        'message' => true,
        'created' => true,
    ];
}
