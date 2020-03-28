<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction_log}}`.
 */
class m200322_152250_create_transaction_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction_log}}', [
            'id' => $this->primaryKey(),
            'from'=>$this->string(),
            'to'=>$this->string(),
            'total_sum'=>$this->integer()->defaultValue(0),
            'date'=>$this->dateTime(),
            'status'=>$this->smallInteger(),
            'error'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction_log}}');
    }
}
