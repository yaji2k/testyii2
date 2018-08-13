<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<?php if (!Yii::$app->session->hasFlash('error')): ?>
    <h2>Профиль: <?= $user[0]->profile_name ?></h2>
    <h3>Имя: <?= $user[0]->name ?></h3>
    <?php $form = ActiveForm::begin(); ?>
    <h3>Оставить заявку пользователю - "<?= $user[0]->name ?>"</h3>
    <?= $form->field($model, 'author')->label('Ваше Имя'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'message')->label('Текст Сообщения')->textarea(['rows' => '10']); ?>
    <?= Html::button('отправить', ['type' => 'submit', 'class' => 'btn btn-success']); ?>
    <?php ActiveForm::end(); ?>
<?php endif; ?>