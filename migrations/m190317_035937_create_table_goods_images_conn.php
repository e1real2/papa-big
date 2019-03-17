<?php

use yii\db\Migration;

/**
 * Class m190317_035937_create_table_goods_images_conn
 */
class m190317_035937_create_table_goods_images_conn extends Migration
{
    public function safeUp()
    {
        $this->createTable('goods_image_conn', [
            'id' => $this->primaryKey(),
            'good_id' => $this->integer(),
            'image_id' => $this->integer(),
            'is_main' => $this->smallInteger()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('goods_image_conn');
    }
}
