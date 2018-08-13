<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\web\View;

?>
<div class="profile"></div>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'recipient')->label('Профиль')->dropDownList(ArrayHelper::map($users, 'profile_name', 'profile_name'), ['prompt' => 'Выберите адресата']); ?>
<?= $form->field($model, 'author')->label('Ваше Имя'); ?>
<?= $form->field($model, 'email'); ?>
<?= $form->field($model, 'message')->label('Текст Сообщения')->textarea(['rows' => '10']); ?>
<?= Html::button('отправить', ['type' => 'Отправить заявление', 'class' => 'btn btn-success']); ?>
<?php ActiveForm::end(); ?>

