<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */

$this->title = $model->Schedule_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Final Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-official-final-schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Schedule_ID' => $model->Schedule_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Schedule_ID' => $model->Schedule_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Schedule_ID',
            'subject_id',
            'teacher_id',
            'room_id',
            'student_id',
            'Status',
            'Day_Schedule',
            'Time_Schedule',
            'Room',
        ],
    ]) ?>

</div>
