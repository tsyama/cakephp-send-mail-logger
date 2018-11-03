<?php
namespace SendMailLogger\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SendMailLogs Model
 *
 * @method \SendMailLogger\Model\Entity\SendMailLog get($primaryKey, $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog newEntity($data = null, array $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog[] newEntities(array $data, array $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog[] patchEntities($entities, array $data, array $options = [])
 * @method \SendMailLogger\Model\Entity\SendMailLog findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SendMailLogsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('send_mail_logs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('to_address')
            ->maxLength('to_address', 255)
            ->allowEmpty('to_address');

        $validator
            ->scalar('from_address')
            ->maxLength('from_address', 255)
            ->allowEmpty('from_address');

        $validator
            ->scalar('cc_address')
            ->maxLength('cc_address', 1000)
            ->allowEmpty('cc_address');

        $validator
            ->scalar('bcc_address')
            ->maxLength('bcc_address', 1000)
            ->allowEmpty('bcc_address');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 1000)
            ->allowEmpty('subject');

        $validator
            ->scalar('message')
            ->allowEmpty('message');

        return $validator;
    }
}
