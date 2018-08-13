<?php

use yii\db\Migration;

/**
 * Class m180813_183741_insert_data_user_table
 */
class m180813_183741_insert_data_user_table extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $data = [
            ['Виталий', 'vitya'],
            ['Лена', 'lena1981'],
            ['Алекс', 'alex86'],
            ['Николай Кузмич', 'kuzmich'],
        ];
        for ($i = 0; $i < count($data); $i++) {
            $this->insert('user', [
                'name' => $data[$i][0],
                'profile_name' => $data[$i][1]
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180813_183741_insert_data_user_table cannot be reverted.\n";

        return false;
    }
    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m180813_183741_insert_data_user_table cannot be reverted.\n";

      return false;
      }
     */
}
