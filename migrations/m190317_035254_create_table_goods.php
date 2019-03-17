<?php

use yii\db\Migration;

/**
 * Class m190317_035254_create_table_goods
 */
class m190317_035254_create_table_goods extends Migration
{
    public function safeUp()
    {
        $this->createTable('goods', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'category_id' => $this->integer()->notNull(),
            'order_number' => $this->integer()->notNull(),
            'height' => $this->string(50),
            'width' => $this->string(50),
            'length' => $this->string(50),
            'weight' => $this->string(50),
            'price' => $this->string(50),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('goods');
    }
}
