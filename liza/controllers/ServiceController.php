<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 19.03.2017
 * Time: 21:08
 */

namespace app\controllers;


use app\models\ContactForm;
use yii\web\Controller;

class ServiceController extends Controller
{
    public function actionIndex()
    {
        $contactForm = new ContactForm();
        return $this->render('service', compact('contactForm'));
    }
}