<?php

namespace frontend\controllers;
use frontend\models\TblOfficialStatus;

class StatusController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGetStatus(){
        $status = TblOfficialStatus::find()->select(['status_id', 'Status'])->all();
        $statusList = \yii\helpers\ArrayHelper::map($status, 'status_id', 'Status');
        return $this->asJson($statusList);
    }

}
