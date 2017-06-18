<?php

use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\widgets\Menu;

$this->title = 'Лизадент | Новости';

\app\assets\ReadMoreAsset::register($this);
$this->registerJsFile('@web/js/news.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>


        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pull-right">
                        <aside class="news-sidebar">
                            <?php $form = ActiveForm::begin([
                                'method' => 'get',
                                'id' => 'searchForm',
                                'action' => ['news/search'],
                                'enableClientValidation' => true,
                                'validateOnBlur' => false,
                                'validateOnType' => false,
                                'validateOnChange' => true,
                            ]) ?>
                            <?= $form->field($searchForm, 'q', [
                                'template' => '<div class="input-group">{input}<span class="input-group-addon"><button type="submit">
                                            <span class="fa fa-search"></span>
                                        </button></span></div>{error}'
                            ])->textInput(['placeholder' => 'Поиск...']) ?>
                            <?php ActiveForm::end() ?>
                            <div class="news-categories">
                                <h3>Категории</h3>
                                <hr>
                                <?= Menu::widget([
                                    'items' => $categories,
                                    'linkTemplate' => '<a href="{url}"><h5>{label}</h5></a>',
                                    'itemOptions' => ['class' => 'news-category']
                                ]) ?>
                            </div>
                            <div class="contacts hidden-xs hidden-sm">
                                <div class="contact-phone">
                                    <p>+38-057-751-48-05</p>
                                    <p>+38-095-775-26-97</p>
                                    <p>+38-067-999-57-67</p>
                                </div>
                                <div class="contact-mail">
                                    <p class="contact-email">lizadent02@ukr.net</p>
                                    <p class="contact-vk">vk.com/lizadent</p>
                                </div>
                                <div class="contact-address">
                                    <p>Пр-кт Независимости (бывший Правды)<br>дом 7, 14 под, каб 153</p>
                                </div>
                                <button class="button button-appoint" data-toggle="modal"
                                        data-target=".bs-example-modal-sm">Записаться на прием
                                </button>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-8 articles">
                        <main>
                        <?php if (!empty($articles->getModels())): ?>
                            <?php
                            echo ListView::widget([
                                'dataProvider' => $articles,
                                'itemOptions' => ['class' => 'item'],
                                'layout' => "Результаты поиска по запросу \"$query\"{summary}{items}{pager}",
                                'itemView' => function ($model, $key, $index, $widget) {
                                    return $this->render('_article', ['model' => $model]);
                                },
                                'pager' => [
                                    'class' => \kop\y2sp\ScrollPager::className(),
                                    'triggerTemplate' => '<div class="news-more"><div class="text-center"><h4>Больше новостей</h4><i class="fa fa-chevron-down"></i></div>',
                                    'noneLeftText' => 'Новостей больше нет'
                                ]
                            ]);
                            ?>
                        <?php else: ?>
                            <h4><?= "Поиск по запросу "
                                . \yii\helpers\Html::encode("\"$query\"")
                                . " не дал результатов" ?>
                            </h4>
                        <?php endif; ?>
                        </main>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?= $this->render('/site/_contact-form', compact('contactForm')); ?>