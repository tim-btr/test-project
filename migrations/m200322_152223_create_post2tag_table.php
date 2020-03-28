<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post2tag}}`.
 */
class m200322_152223_create_post2tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post2tag}}', [
            'id' => $this->primaryKey(),
            'post_id'=>$this->integer(),
            'tag_id'=>$this->integer()
        ]);
    
        // creates index for column `user_id`
        $this->createIndex(
            'tag_post_post_id',
            'post2tag',
            'post_id'
        );
    
    
        // add foreign key for table `user`
        $this->addForeignKey(
            'tag_post_post_id',
            'post2tag',
            'post_id',
            'posts',
            'id',
            'CASCADE'
        );
    
        // creates index for column `user_id`
        $this->createIndex(
            'idx_tag_id',
            'post2tag',
            'tag_id'
        );
    
    
        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tag_id',
            'post2tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post2tag}}');
    }
}
