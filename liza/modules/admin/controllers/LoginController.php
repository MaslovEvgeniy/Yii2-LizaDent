<?php
/**
 * Created by PhpStorm.
 * User: maslo
 * Date: 06-Jun-17
 * Time: 19:26
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\LoginForm;
use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }


}