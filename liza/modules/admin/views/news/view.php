<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Управление новостями', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'Категория',
                'value' => function($data){
                    return $data->category->title;
                }
            ],
            'title',
            //'img',
            [
                'attribute' => 'Изображение',
                'format' => 'html',
                'value' => function($data){
                    return Html::img($data->getImage()->getUrl(), ['class' => 'img-responsive']);
                }
            ],
            'content:html',
            'date',
        ],
    ]) ?>

</div>
