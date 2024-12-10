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
            // 'status_id',
            // 'weekday_id',
            // 'time_id:datetime',

            //DAGDAG
            [
                'attribute' => 'subject_id',
                'value' => 'subject.subject_name', // Automatically uses relation
            ],
            [
                'attribute' => 'teacher_id',
                'value' => 'teacher.last_name',
            ],
            [
                'attribute' => 'room_id',
                'value' => 'room.Room_Number',
            ],
            [
                'attribute' => 'student_id',
                'value' => 'student.last_name', 
            ],  
            ['class' => 'yii\grid\ActionColumn',
            //DAGDAG
            'urlCreator' => function ($action, $model, $key, $index) {
        if ($action === 'update') {
            return ['schedule/update', 'Schedule_ID' => $model->Schedule_ID]; // Ensure the key matches your table column
        }
        return [$action, 'Schedule_ID' => $model->Schedule_ID];
    },
        ],
        //dagdag
            //dagdag    
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, TblOfficialFinalSchedule $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'Schedule_ID' => $model->Schedule_ID]);
            //      }
            // ],
        ],
    ]); ?>


</div>
