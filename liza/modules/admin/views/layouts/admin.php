<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\modules\admin\assets\AdminAsset;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="row">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"><span
                            class="sr-only">Toggle navigation</span> <i class="fa fa-bars fa-2x"></i></button>
                    <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Logo"> <img src="/img/lizadent.png"
                                                                                               alt="Lizadent"> </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <?= \yii\bootstrap\Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => [
                            [
                                'label' => 'Управление новостями',
                                'url' => ['/admin/news'],
                                'visible' => !Yii::$app->user->isGuest,
                                'active' => Yii::$app->controller->id === 'news'
                            ],
                            [
                                'label' => 'Управление заявками',
                                'url' => ['/admin/appointment'],
                                'visible' => !Yii::$app->user->isGuest,
                                'active' => Yii::$app->controller->id === 'appointment'
                            ],
                            [
                                'label' => 'Настройки',
                                'url' => ['/admin/settings'],
                                'visible' => !Yii::$app->user->isGuest,
                                'active' => Yii::$app->controller->id === 'settings'
                            ],
                            [
                                'label' => 'Вход',
                                'url' => ['/admin/login'],
                                'visible' => Yii::$app->user->isGuest
                            ],
                            [
                                'label' => 'Выход',
                                'url' => ['/admin/login/logout'],
                                'visible' => !Yii::$app->user->isGuest
                            ]
                        ]
                    ]) ?>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="container">
    <?php echo Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);
    ?>
    <?= $content ?>
</div>

<footer>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
