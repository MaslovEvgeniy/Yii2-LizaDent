<?php

namespace app\modules\admin\models;

use app\models\Category;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $content
 * @property string $date
 * @property string $img
 */
class Article extends \yii\db\ActiveRecord
{
    public $file;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content'], 'required'],
            [['category_id'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['file'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'category_id' => 'Категория',
            'title' => 'Заголовок',
            'content' => 'Содержимое',
            'date' => 'Дата',
            'file' => 'Изображение'
        ];
    }

    public function upload() {
        if($this->validate()) {
            $path = 'upload/store/' . $this->file->baseName . '.' . $this->file->extension;
            $this->file->saveAs($path);
            $this->removeImages();
            $this->attachImage($path);
            @unlink($path);
            return true;
        } else {
            return false;
        }
    }
}
