<?php

use yii\db\Migration;

/**
 * Handles the creation of table `messages`.
 */
class m180817_122947_create_messages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(25)->notNull(),
            'message' => $this->string(500)->notNull(),
            'email' => $this->string(50)->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('messages');
    }
}
