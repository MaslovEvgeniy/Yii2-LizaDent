<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
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

<header class="header-home">
    <div class="row">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars fa-2x"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/img/logo.png" alt="Logo">
                        <img src="/img/lizadent.png" alt="Lizadent">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Главная</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#prices">Цены</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row header-content">
                <h1>Стоматология для всей семьи</h1>
                <p>Лизадент - это место, где каждому пациенту уделяется особое внимание. И неважно, постоянный ли это
                    посетитель или человек, который пришел к нам впервые.</p>
                <button class="button button-appoint" data-toggle="modal" data-target=".bs-example-modal-sm">Записаться на прием</button>
            </div>
        </div>
        <div class="home-bg"></div>
    </div>
</header>

<?= $content ?>

<footer>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
