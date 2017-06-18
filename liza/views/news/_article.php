<?php

?>
<article class="article-full">
    <img class="article-img img-responsive" src="<?= $model->getImage()->getUrl() ?>" alt="">
    <h1 class="article-title"><?= $model->title ?></h1>
    <a href="/news/<?= $model->category->slug ?>"
       class="article-category"><?= $model->category->title ?></a>
    <p class="article-date"><?= $model->rusDate ?></p>
    <div class="article-description">
        <?= $model->content ?>
    </div>
    <hr>
</article>
