<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Настройки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="bg-success">
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php elseif (Yii::$app->session->hasFlash('error')): ?>
        <div class="bg-error">
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>

    <div class="col-md-6">
        <h4>Замена прайс-листа</h4>
        <?= Html::a('Скачать текущий прайс-лист', ['/site/download'], ['class' => 'btn btn-primary btn-price']) ?>
        <?php $form = ActiveForm::begin(['action' => ['settings/upload'], 'options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($uploadForm, 'excelFile')->fileInput() ?>

        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success pull-left']) ?>

        <?php ActiveForm::end() ?>

    </div>
    <div class="col-md-6">
        <h4>Настройки администратора</h4>
        <?= Html::a('Сменить пароль', ['settings/password'], ['class' => 'btn btn-primary']) ?>
    </div>

</div>
