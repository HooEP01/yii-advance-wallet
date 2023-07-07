<?php

use yii\db\Migration;

/**
 * Class m230706_141011_note
 */
class m230706_141011_note extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%note}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            // 'tags' => $this->textArray()->null()->comment('from enum'),
            'priority' => $this->string(64)->null(),
            'due_date' => $this->integer()->null(), 
            'status' => $this->string(64)->null(),
            'created_at' => $this->integer()->null(),
            'updated_at' => $this->integer()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230706_141011_note cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230706_141011_note cannot be reverted.\n";

        return false;
    }
    */
}
