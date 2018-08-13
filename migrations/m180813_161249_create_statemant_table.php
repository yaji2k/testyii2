<?php

use yii\db\Migration;

/**
 * Handles the creation of table `statemant`.
 */
class m180813_161249_create_statemant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('statemant', [
            'id' => $this->primaryKey(),
            'author' => $this->string(128),
            'email' => $this->string(128),
            'message' => $this->text(),
            'recipient' => $this->string(128),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('statemant');
    }
}
