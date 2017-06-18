<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 15.04.2017
 * Time: 17:54
 */

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'article';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getRusDate()
    {
        $months = [
            1 => 'Января' ,
            2 => 'Февраля' ,
            3 => 'Марта' ,
            4 => 'Апреля' ,
            5 => 'Мая' ,
            6 => 'Июня' ,
            7 => 'Июля' ,
            8 => 'Августа' ,
            9 => 'Сентября' ,
            10 => 'Октября' ,
            11 => 'Ноября' ,
            12 => 'Декабря'
        ];

        $date = strtotime($this->date);

        return date('d ', $date) . $months[(int)date('m',$date)] . date(' Y', $date);
    }
}