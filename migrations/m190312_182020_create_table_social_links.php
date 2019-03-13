<?php

use yii\db\Migration;
/**
 * Class m190312_182020_create_table_social_links
 */
class m190312_182020_create_table_social_links extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('social_links', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'order_num' => $this->smallInteger(),
            'type' => $this->string(100)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('social_links');
    }
}
