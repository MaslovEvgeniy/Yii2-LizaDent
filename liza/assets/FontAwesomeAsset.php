<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 20.03.2017
 * Time: 13:17
 */

namespace app\assets;


use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';

    public $css = [
        'css/font-awesome.min.css',
    ];
}