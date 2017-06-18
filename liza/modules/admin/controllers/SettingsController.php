<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\PasswordForm;
use app\modules\admin\models\PriceForm;
use app\modules\admin\models\User;
use Yii;
use yii\base\Exception;
use yii\web\UploadedFile;

class SettingsController extends AppAdminController
{
    public function actionIndex()
    {
        $uploadForm = new PriceForm();

        $passwordForm = new PasswordForm();

        return $this->render('index', compact('uploadForm', 'passwordForm'));
    }

    public function actionPassword() {
        $passwordForm = new PasswordForm();

        if ($passwordForm->load(Yii::$app->request->post())) {
            if ($passwordForm->validate()) {
                try {
                    $user = User::findByUsername(Yii::$app->user->identity->username);
                    $user->password = Yii::$app->security->generatePasswordHash($_POST['PasswordForm']['newpass']);
                    if ($user->save()) {
                        Yii::$app->getSession()->setFlash(
                            'success', 'Пароль успешно изменен'
                        );
                        return $this->redirect('index');
                    } else {
                        Yii::$app->getSession()->setFlash(
                            'error', 'При изменении пароля произошла ошибка. Попробуйте снова'
                        );
                        return $this->redirect('index');
                    }
                } catch (Exception $e) {
                    Yii::$app->getSession()->setFlash(
                        'error', "{$e->getMessage()}"
                    );
                    return $this->render('index');
                }
            } else {
                return $this->render('password', compact('passwordForm'));
            }
        }

        return $this->render('password', compact('passwordForm'));
    }

    public function actionUpload()
    {
        $uploadForm = new PriceForm();

        if (Yii::$app->request->isPost) {
            $uploadForm->excelFile = UploadedFile::getInstance($uploadForm, 'excelFile');
            if ($uploadForm->upload()) {
                Yii::$app->getSession()->setFlash(
                    'success', 'Файл успешно сохранен'
                );
                return $this->redirect(['index']);
            }
        }
        return $this->redirect(['index']);
    }
}