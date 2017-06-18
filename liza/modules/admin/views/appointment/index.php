<?php


use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление заявками';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::beginForm(['appointment/bulk'], 'post'); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'rowOptions' => function ($model) {
            if ($model->looked == 0) {
                return ['class' => 'danger'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'author',
            'phone',
            'date',
            [
                'attribute' => 'looked',
                'value' => function ($data) {
                    return $data->looked ? "Да" : "Нет";
                }
            ],


            ['class' => 'yii\grid\CheckboxColumn'],
        ],
    ]); ?>

    <div class="action pull-right">
        <?= Html::dropDownList('action', '', ['ch' => 'Пометить прочитанным', 'del' => 'Удалить'], ['class' => 'dropdown']) ?>

        <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-success confirm',]); ?>
    </div>
    <?= Html::endForm() ?>
</div>
