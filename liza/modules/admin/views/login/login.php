<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="login-page">
    <div class="form">
            <?php $form = ActiveForm::begin([
                'id' => 'loginForm',
                'class' => 'login-form',
                'action' => '/admin/login/login',
                'enableClientValidation' => true,
                'validateOnBlur' => false,
                'validateOnType' => false,
                'validateOnChange' => true,
            ]) ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput()?>
            <?= Html::submitButton('Войти') ?>
            <?php ActiveForm::end(); ?>
    </div>
</div>