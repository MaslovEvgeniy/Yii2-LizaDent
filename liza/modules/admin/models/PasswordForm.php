<?php
/**
 * Created by PhpStorm.
 * User: maslo
 * Date: 12-Jun-17
 * Time: 22:07
 */

namespace app\modules\admin\models;


use Yii;
use yii\base\Model;

class PasswordForm extends Model
{
    public $oldpass;
    public $newpass;
    public $repeatnewpass;

    public function rules(){
        return [
            [['oldpass','newpass','repeatnewpass'],'required'],
            ['oldpass','findPasswords'],
            ['repeatnewpass','compare','compareAttribute'=>'newpass'],
        ];
    }

    public function findPasswords($attribute, $params){
        $user = User::findByUsername(Yii::$app->user->identity->username);
        if(!$user->validatePassword($this->oldpass))
            $this->addError($attribute,'Неверный старый пароль');
    }

    public function attributeLabels(){
        return [
            'oldpass'=>'Старый пароль',
            'newpass'=>'Новый пароль',
            'repeatnewpass'=>'Повторите пароль',
        ];
    }
}