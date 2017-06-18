<?php

use app\assets\OwlAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Лизадент';

OwlAsset::register($this);
\app\assets\ReadMoreAsset::register($this);
$this->registerJsFile('@web/js/index.js',  ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<main>
    <section class="about full-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-info about-info">
                        <h3 class="section-title">О нас<span class="back-text">О нас</span></h3>
                        <p class="section-description">Улыбчивый, приветливый персонал – у нас Вы забудете о том, что
                            находитесь в стоматологии. Даже дети, которые приходят к нам со своими родителями, чувствуют
                            себя спокойно и комфортно, не боятся лечения зубов, благодаря очень дружелюбной и домашней
                            атмосфере, которую мы создали для Вас. </p>
                    </div>
                </div>
                <div class="col-md-7 features">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="feature"><i class="info-1"></i>
                                <h4>Гарантированный успех лечения</h4></div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="feature pull-right"><i class="info-2"></i>
                                <h4>Использование новых технологий</h4></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="feature"><i class="info-3"></i>
                                <h4>Сертифицированные доктора</h4></div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="feature pull-right"><i class="info-4"></i>
                                <h4>Лечение от начала до конца</h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-info">
                        <h3 class="section-title">Сервис<span class="back-text">Сервис</span></h3>
                        <p class="section-description">Клиника ЛизаДент оказывает профессиональные стоматологические
                            услуги самых разных направлений. У нас установлено новейшее профессиональное оборудование и
                            используются только качественные сертифицированные материалы.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="service-slider" class="owl-carousel">
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl1.png" alt="">
                            </div>
                            <h4>Профессиональная чистка</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl2.png" alt="">
                            </div>
                            <h4>Художественная реставрация</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl3.png" alt="">
                            </div>
                            <h4>Протезирование</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl4.png" alt="">
                            </div>
                            <h4>Украшение зуба</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl5.png" alt="">
                            </div>
                            <h4>Лечение кариеса</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl6.png" alt="">
                            </div>
                            <h4>Лечение корневого канала</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl7.png" alt="">
                            </div>
                            <h4>Удаление зуба</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl8.png" alt="">
                            </div>
                            <h4>Ортодонтия</h4>
                        </div>
                        <div class="item">
                            <div class="img-wr">
                                <img src="img/service-sl9.png" alt="">
                            </div>
                            <h4>Имплантология</h4>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/service">
                        <button class="button button-more">Больше</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="prices full-bg" id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-info">
                        <h3 class="section-title">Цены<span class="back-text">Цены</span></h3>
                    </div>
                </div>
            </div>
            <div class="row prices-content">
                <div class="col-md-6 col-sm-6">
                    <div class="prices-img">
                        <img class="img-responsive" src="img/prices-img.jpg" alt="">
                        <span>Акция</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="prices-info">
                        <h3 class="prices-title">Бесплатный сервис</h3>
                        <p class="prices-description">Стоматология ЛизаДент предоставляет бесплатные услуги: осмотр и
                            консультация. Наши специалисты подберут хорошее лечение, которое непременно даст результат.
                            Вы можете ознакомиться с подробными ценами на наши услуги, перейдя по кнопке.</p>
                        <?= Html::a('Подробный прайс', ['/price'], ['class' => 'button button-more']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-info text-center">
                        <h3 class="section-title">Наша команда<span class="back-text">Команда</span></h3>
                        <p class="section-description">Мы хотим, чтобы наш пациент мог решить все свои проблемы в одном
                            месте , поэтому стоматология ЛизаДент собрала под своей крышей самых лучших специалистов
                            всех направлений стоматологии.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="team-slider" class="owl-carousel text-center">
                        <div class="person">
                            <img src="img/person-1.png" alt="Наша команда" class="img-responsive">
                            <div class="info">
                                    <h4>Бырка<br> Оксана Николаевна</h4>
                                    <p>врач-стоматолог 1 категории</p>
                                    <div class="phone"><i class="fa fa-phone fa-2x"></i>
                                        <p>+380-67-99-95-767</p>
                                        <p>+380-67-99-95-767</p>
                                    </div>
                            </div>
                        </div>
                        <div class="person">
                            <img src="img/person-1.png" alt="Наша команда" class="img-responsive">
                            <div class="info">
                                    <h4>Бырка<br> Оксана Николаевна</h4>
                                    <p>врач-стоматолог 1 категории</p>
                                    <div class="phone"><i class="fa fa-phone fa-2x"></i>
                                        <p>+380-67-99-95-767</p>
                                        <p>+380-67-99-95-767</p>
                                    </div>
                            </div>
                        </div>
                        <div class="person">
                            <img src="img/person-1.png" alt="Наша команда" class="img-responsive">
                            <div class="info">
                                    <h4>Бырка<br> Оксана Николаевна</h4>
                                    <p>врач-стоматолог 1 категории</p>
                                    <div class="phone"><i class="fa fa-phone fa-2x"></i>
                                        <p>+380-67-99-95-767</p>
                                        <p>+380-67-99-95-767</p>
                                    </div>
                            </div>
                        </div>
                        <div class="person">
                            <img src="img/person-1.png" alt="Наша команда" class="img-responsive">
                            <div class="info">
                                    <h4>Бырка<br> Оксана Николаевна</h4>
                                    <p>врач-стоматолог 1 категории</p>
                                    <div class="phone"><i class="fa fa-phone fa-2x"></i>
                                        <p>+380-67-99-95-767</p>
                                        <p>+380-67-99-95-767</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients full-bg">
        <div class="container">
            <div class="row">
                <div id="clients-slider" class="owl-carousel text-center">
                    <div class="item"><img src="img/client.jpg" alt="Client">
                        <h4>Елена Васильченко</h4>
                        <p class="comment">Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ замечательным докторам Lizadent. Таки
                            зубы лечить действительно не больно, а теперь еще и не страшно! Но все это благодаря чутким
                            людям и настоящим профессионалам-Оксане Николаевне, Анне.</p>
                    </div>
                    <div class="item"><img src="img/client.jpg" alt="Client">
                        <h4>Елена Васильченко</h4>
                        <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="short-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-info">
                        <h3 class="section-title">Новости<span class="back-text">Новости</span></h3></div>
                </div>
            </div>
            <div class="row articles">
                <div class="col-md-12">
                    <?php foreach ($latestNews as $article): ?>
                        <div class="col-md-6">
                            <article class="article-short">
                                <img class="article-img img-responsive" src="<?= $article->getImage()->getUrl() ?>" alt="">
                                <h1 class="article-title"><?= $article->title ?></h1>
                                <a href="/news/<?= $article->category->slug ?>"
                                   class="article-category"><?= $article->category->title ?></a>
                                <p class="article-date"><?= $article->rusDate ?></p>
                                <div class="article-description">
                                    <?= $article->content ?>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="text-center">
                <a href="/news">
                    <button class="button button-more">Больше</button>
                </a>
            </div>
        </div>
    </section>
    <section class="contact full-bg" id="contact">
        <div class="container">
            <div class="section-info text-center">
                <h3 class="section-title">Контакты<span class="back-text">Контакты</span></h3>
            </div>
            <div class="row contacts">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-phone">
                    <p>+38-057-751-48-05<br>+38-095-775-26-97<br>+38-067-999-57-67</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-mail">
                    <p class="contact-email">lizadent02@ukr.net</p>
                    <p class="contact-vk">vk.com/lizadent</p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 contact-address">
                    <p>Пр-кт Независимости (бывший Правды)<br>дом 7, 14 под, каб 153</p>
                </div>
            </div>
            <div class="row text-center">
                <button class="button button-appoint" data-toggle="modal" data-target=".bs-example-modal-sm">Записаться на прием</button>
            </div>
        </div>
    </section>
</main>

<?= $this->render('_contact-form', compact('contactForm')); ?>