<?php

namespace frontend\controllers;

use frontend\models\TblOfficialWeekdays;

class WeekdayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGetWeekday(){
        $weekday = TblOfficialWeekdays::find()->select(['weekday_id', 'Day'])->all();
        $weekdayList = \yii\helpers\ArrayHelper::map($weekday, 'weekday_id', 'Day');
        return $this->asJson($weekdayList);
    }

}
