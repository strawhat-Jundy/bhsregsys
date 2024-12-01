<?php

use frontend\models\BHSSchedule;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\schedule\scheduleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bhs Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bhsschedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bhs Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Schedule_ID',
            'subject_id',
            'teacher_id',
            'room_id',
            'student_id',
            //'Status',
            //'Day_Schedule',
            //'Time_Schedule',
            //'Room',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BHSSchedule $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Schedule_ID' => $model->Schedule_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
