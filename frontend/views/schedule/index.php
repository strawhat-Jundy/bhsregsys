<?php

use frontend\models\TblOfficialFinalSchedule;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\schedule\scheduleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Official Final Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-final-schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Official Final Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Schedule_ID',
        
            // 'subject_id',
            // 'teacher_id',
            // 'room_id',
            // 'student_id',
            //'status_id',
            //'weekday_id',
            //'time_id:datetime',
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblOfficialFinalSchedule $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Schedule_ID' => $model->Schedule_ID]);
                 }
            ],
        ],
    ]); ?> -->

 <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'Schedule_ID', 
        [
            'attribute' => 'subject_id',
            'value' => function ($model) {
                return $model->subject ? $model->subject->subject_name : null; // Adjust 'subject_name' to match your column in the subject table
            },
            'label' => 'Subject',
        ],
        // Display related Subject name
        // [
        //     'attribute' => 'subject_id',
        //     'value' => function ($model) {
        //         return $model->subject ? $model->subject->subject_name : null; // Adjust 'subject_name' to match your column in the subject table
        //     },
        //     'label' => 'Subject',
        // ],

        // Display related Teacher last name
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

        ['class' => ActionColumn::className(),
            'urlCreator' => function ($action, TblOfficialFinalSchedule $model, $key, $index, $column) {
                return Url::toRoute([$action, 'Schedule_ID' => $model->Schedule_ID]);
            }
        ],
    ],
]); ?>



</div>
