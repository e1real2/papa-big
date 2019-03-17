<?php

use yii\db\Migration;

/**
 * Class m190315_175507_create_table_three_card
 */
class m190315_175507_create_table_three_card extends Migration
{
        /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('three_card', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'order_number' => $this->integer()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('three_card');
    }
}
