<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property integer $id
 * @property string $author
 * @property string $phone
 * @property string $date
 * @property integer $looked
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер заявки',
            'author' => 'Автор',
            'phone' => 'Номер телефона',
            'date' => 'Дата',
            'looked' => 'Просмотрено',
        ];
    }
}
