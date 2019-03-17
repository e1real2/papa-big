<?php

use yii\db\Migration;

/**
 * Class m190317_044942_create_table_contact
 */
class m190317_044942_create_table_contact extends Migration
{
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->text(),
            'map_lat' => $this->string(100),
            'map_long' => $this->string(100),
            'map_text' => $this->text(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
