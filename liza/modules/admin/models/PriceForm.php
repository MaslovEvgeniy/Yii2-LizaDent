<?php
/**
 * Created by PhpStorm.
 * User: maslo
 * Date: 12-Jun-17
 * Time: 21:09
 */

namespace app\modules\admin\models;


use yii\base\Model;

class PriceForm extends Model
{
    public $excelFile;

    public function rules()
    {
        return [
            [['excelFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xlsx'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'excelFile' => 'Файл Excel',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->excelFile->saveAs('files/' . 'priceList' . '.' . $this->excelFile->extension);
            return true;
        } else {
            return false;
        }
    }
}