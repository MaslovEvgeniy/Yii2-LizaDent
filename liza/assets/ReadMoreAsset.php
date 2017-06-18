<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 15.04.2017
 * Time: 14:27
 */

namespace app\assets;


use yii\web\AssetBundle;

class ReadMoreAsset extends AssetBundle
{
    public $sourcePath = '@bower';

    public $js = [
        'readmore-js\readmore.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}