<?php

use yii\db\Migration;

/**
 * Class m190315_224042_create_table_history_cards
 */
class m190315_224042_create_table_history_cards extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('history_cards', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255),
            'title' => $this->string(255)->notNull(),
            'url' => $this->string(500)->notNull(),
            'order_number' => $this->integer()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('history_cards');
    }
}
