<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

?>

<div class="article-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),
        'id', 'title')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>
    <?php
    if ($model->getImage()) {
        $path = $model->getImage()->getUrl();
    } else {
        $path = '/img/placeholder.png';
    }
    ?>
    <?= Html::img($path, ['class' => 'img-responsive preview']) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' =>[
            'preset' => 'standard',
            ElFinder::ckeditorOptions(['elfinder'], []),
        ]]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
