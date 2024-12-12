<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&display=swap", ['position' => \yii\web\View::POS_HEAD]);
$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Miss+Fajardose&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", ['position' => \yii\web\View::POS_HEAD]);

$this->title = $model->Schedule_ID;
// $this->params['breadcrumbs'][] = ['label' => 'Tbl Official Final Schedules', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-official-final-schedule-view">

    <h1 class="custom-title"><?= Html::encode($this->title) ?></h1>

    <p class="button-group">
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
            'status_id',
            'weekday_id',
            'time_id:datetime',
        ],
    ]) ?>

</div>

<!-- Internal CSS -->
<style>
    body {
        background-image: url('https://lh3.googleusercontent.com/pw/AP1GczNR0sHAB111cIMF4wPxcmMrLBglh7XAcB3E05l_a8ROjW-4PP2dX1PIpcXUnfkJPv3LyT4h_bhPsu4nuNrFIsjiHAJ2a-VBS0wA2ndMH26eyTxmxlcW8ys4s2k-QbZfLhHUqQTOkJa0cvLQg82mLgr6=w768-h1024-s-no-gm?authuser=0'); /* Replace this link */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .custom-title {
        font-size: 55px;
        font-family: "Orbitron", serif;
        font-weight: bold;
        color: #001840;
        text-align: center;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        margin-top: 40px;
        margin-bottom: 20px;
        border-radius: 40px;
    }

    .button-group {
        text-align: center;
        margin-bottom: 20px;
        font-family: "Montserrat", sans-serif;
    }

    .tbl-official-final-schedule-view .btn {
        color: #001840;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .tbl-official-final-schedule-view .btn-primary {
        background-color: #f2f8fc;
        color: #001840;
    }

    .tbl-official-final-schedule-view .btn-primary:hover {
        background-color: #f5c400;
        color: #001840;
    }

    .tbl-official-final-schedule-view .btn-danger {
        background-color: #001840;
        color: #f2f8fc;
    }

    .tbl-official-final-schedule-view .btn-danger:hover {
        background-color: #f5c400;
        color: #001840;
    }

    .tbl-official-final-schedule-view .detail-view {
        width: 100%;
        border-collapse: collapse;
        border-radius: 20px;
        box-shadow: 5px 5px 15px rgba(0.5, 0.5, 0.5, 0.2);
        overflow: hidden;
        font-family: "Montserrat", sans-serif;
    }

    .tbl-official-final-schedule-view table {
        background-color: #001840;
        color: white;
        text-align: center;
        font-weight: bold;
        padding: 10px;
    }

    .tbl-official-final-schedule-view th,
    .tbl-official-final-schedule-view td {
        background-color: #001840;
        color: white;
        text-align: center;
        font-weight: bold;
        padding: 10px;
    }

    .tbl-official-final-schedule-view th {
        background-color: #f2f8fc;
        font-weight: bold;
        color: #001840;
    }

    .tbl-official-final-schedule-view td {
        background-color: #001840;
        color: #ddd;
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }
</style>
