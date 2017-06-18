<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 15.04.2017
 * Time: 18:30
 */

namespace app\models;


use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function behaviors()
    {
        return [
            [
                'class' => \app\components\SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
                'transliterator' => 'Russian-Latin/BGN; NFKD',
                //Set this to true, if you want to update a slug when source attribute has been changed
                'forceUpdate' => false
            ],
        ];
    }

    public function getArticles() {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }

}