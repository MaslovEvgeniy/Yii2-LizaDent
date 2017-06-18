<?php
/**
 * Created by PhpStorm.
 * User: maslo
 * Date: 11-Jun-17
 * Time: 17:30
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Appointment;
use Yii;
use yii\data\ActiveDataProvider;

class AppointmentController extends AppAdminController
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Appointment::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC,
                ]
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBulk()
    {
        $action = Yii::$app->request->post('action');
        $selection = (array)Yii::$app->request->post('selection');//typecasting
        if ($action === 'ch') {
            foreach ($selection as $id) {
                $model = Appointment::findOne((int)$id);//make a typecasting
                $model->looked = 1;
                $model->save();
            }
        } elseif ($action === 'del') {
            foreach ($selection as $id) {
                $model = Appointment::findOne((int)$id);//make a typecasting
                $model->delete();
            }
        }
        return $this->redirect(['index']);

    }
}