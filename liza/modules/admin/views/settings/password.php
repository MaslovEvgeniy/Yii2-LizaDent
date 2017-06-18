<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Настройки | Смена пароля';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-md-6">
        <?php $form = ActiveForm::begin([
            'id' => 'changepassword-form',
        ]); ?>
        <?= $form->field($passwordForm, 'oldpass')->passwordInput() ?>

        <?= $form->field($passwordForm, 'newpass')->passwordInput() ?>

        <?= $form->field($passwordForm, 'repeatnewpass')->passwordInput() ?>

        <?= Html::submitButton('Сменить пароль', [
            'class' => 'btn btn-success'
        ]) ?>
        <?php ActiveForm::end(); ?>
    </div>


</div>
