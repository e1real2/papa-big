<?php

use yii\db\Migration;

/**
 * Class m190317_035248_create_table_category
 */
class m190317_035248_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'image' => $this->string(255),
            'description' => $this->text(),
            'order_number' => $this->integer()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
