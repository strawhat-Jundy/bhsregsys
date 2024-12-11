<?php

use frontend\models\TblOfficialFinalSchedule;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\schedule\scheduleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balingasa High School Official Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-final-schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create BHS Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'Schedule_ID',
            // 'subject_id',
            // 'teacher_id',
            // 'room_id',
            // 'student_id',
            //'status_id',
            //'weekday_id',
            //'time_id:datetime',
            [
                'attribute' => 'teacher_id',
                'value' => function ($model) {
                    return $model->teacher ? $model->teacher->last_name : null; // Adjust 'last_name' to match your column in the teacher table
                },
                'label' => 'Teacher',
            ],

            // Display related Room number
            [
                'attribute' => 'room_id',
                'value' => function ($model) {
                    return $model->room ? $model->room->Room_Number : null; // Adjust 'room_number' to match your column in the room table
                },
                'label' => 'Room',
            ],

            // Display related Student full name
            [
                'attribute' => 'student_id',
                'value' => function ($model) {
                    return $model->student ? $model->student->last_name : null; // Adjust 'full_name' to match your column in the student table
                },
                'label' => 'Student',
            ],
            [
                'attribute' => 'weekday_id',
                'value' => function ($model) {
                    return $model->weekday ? $model->weekday->Day : null; // Adjust 'full_name' to match your column in the student table
                },
                'label' => 'weekdays',
            ],

            [
                'attribute' => 'time_id',
                'value' => function ($model) {
                    return $model->time ? $model->time->Time_Schedule : null; // Adjust 'full_name' to match your column in the student table
                },
                'label' => 'time',
            ],

           
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblOfficialFinalSchedule $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Schedule_ID' => $model->Schedule_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
