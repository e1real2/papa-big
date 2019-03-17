<?php

use yii\db\Migration;

/**
 * Class m190317_035953_create_table_goods_images
 */
class m190317_035953_create_table_goods_images extends Migration
{
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'name' => $this->string(255),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('images');
    }
}
