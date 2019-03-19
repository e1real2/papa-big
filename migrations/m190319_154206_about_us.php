<?php

use yii\db\Migration;

/**
 * Class m190319_154206_about_us
 */
class m190319_154206_about_us extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about_us', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('about_us');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190319_154206_about_us cannot be reverted.\n";

        return false;
    }
    */
}
