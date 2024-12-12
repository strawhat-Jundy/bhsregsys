<?php

namespace frontend\controllers;

use frontend\models\TblOfficialTimeSchedule;

class TimeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    

    public function actionGetTime(){
        $time = TblOfficialTimeSchedule::find()->select(['time_id', 'Time_Schedule'])->all();
        $timeList = \yii\helpers\ArrayHelper::map($time, 'time_id', 'Time_Schedule');
        return $this->asJson($timeList);
    }

}
