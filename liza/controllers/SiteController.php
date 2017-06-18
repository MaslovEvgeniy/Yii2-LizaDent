<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class SiteController extends Controller
{
    public $layout = 'home';

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $contactForm = new ContactForm();

        $latestNews = Article::find()->limit(2)->orderBy(['date' => SORT_DESC])->all();

        return $this->render('index', compact('contactForm', 'latestNews'));
    }

    public function actionContact()
    {
        $contactForm = new ContactForm();
        $request = \Yii::$app->getRequest();

        if ($request->isPost && $contactForm->load($request->post())) {
            if ($contactForm->validate() && $contactForm->save()) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return true;
            }
        }
        return false;
    }

    public function actionDownload()
    {
        $path = Yii::getAlias('@webroot') . '/files';
        $file = $path . '/priceList.xlsx';
        if (file_exists($file)) {
            Yii::$app->response->sendFile($file);
        } else {
            throw new NotFoundHttpException();
        }
    }

}
