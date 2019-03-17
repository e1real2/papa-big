<?php

use yii\db\Migration;

/**
 * Class m190315_202716_create_table_history
 */
class m190315_202716_create_table_history extends Migration
{
        /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('history', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('history');
    }
}
