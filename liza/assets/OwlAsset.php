<?php

namespace app\assets;

use yii\web\AssetBundle;

class OwlAsset extends AssetBundle
{
    public $sourcePath = '@bower/owl.carousel';

    public $css = [
        'dist/assets/owl.carousel.css',
        'dist/assets/owl.theme.default.css',
    ];
    public $js = [
        'dist/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}