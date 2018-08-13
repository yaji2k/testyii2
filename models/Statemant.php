<?php
namespace app\models;

use \yii\db\ActiveRecord;

class Statemant extends ActiveRecord
{
    public function rules()
    {
        return [
            [['author', 'email', 'message'], 'required', 'message' => 'Поле не может быть пустым'],
            ['email', 'email',],
            ['recipient', 'required', 'message' => 'Выберите профиль из списка'],
        ];
    }
}
