<?php

namespace app\models;

use yii\base\Model;

class NewsSearchForm extends Model
{
    public $q;

    public function formName()
    {
        return '';
    }

    public function rules()
    {
        return [
            ['q', 'required', 'message' => 'Значение поля не может быть пустым'],
            ['q', 'trim'],
            ['q', 'safe'],
            ['q', 'string', 'length' => [3, 50],
                'tooLong' => 'Максимальная длина 50 символов',
                'tooShort' => 'Минимальная длина 3 символа',
            ]
        ];
    }

}