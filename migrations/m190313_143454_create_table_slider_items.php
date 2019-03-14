<?php

use yii\db\Migration;

/**
 * Class m190313_143454_create_table_slider_items
 */
class m190313_143454_create_table_slider_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('slider_items', [
            'id' => $this->primaryKey(),
            'file_path' => $this->string(255),
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
        $this->dropTable('slider_items');
    }
}
