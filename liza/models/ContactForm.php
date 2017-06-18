<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class ContactForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'appointment';
    }

    public function attributeLabels()
    {
       return [
           'author' => 'Имя',
           'phone' => 'Номер телефона',
        ];
    }

    public function rules()
    {
        return [
          [['author', 'phone'], 'required', 'message' => 'Необходимо заполнить это поле'],
          ['phone', 'match', 'pattern' => '/^\+38\-0[\d]{2}\-[\d]{3}\-[\d]{2}\-[\d]{2}$/',
              'message' => 'Номер телефона введен неверно'],
        ];
    }

}