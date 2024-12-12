<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialStudents $model */

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&display=swap", ['position' => \yii\web\View::POS_HEAD]);

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Miss+Fajardose&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", ['position' => \yii\web\View::POS_HEAD]);


$this->title = $model->student_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbl Official Students', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-official-students-view">

    <h1 class="custom-title"><?= Html::encode($this->title) ?></h1>

    <p class="button-group">
        <?= Html::a('Update', ['update', 'student_id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'student_id' => $model->student_id], [
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
            'student_id',
            'lrn',
            'first_name',
            'last_name',
            'gender',
            'birthdate',
            'place_of_birth',
            'address',
            'religion',
            'email:email',
            'civil_status',
            'nationality',
            'language',
            'middle_name',
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

    /* Styling for the buttons */
    .button-group {
        text-align: center;
        margin-bottom: 20px;
        font-family:  "Montserrat", sans-serif;
    }

    .tbl-official-students-view .btn {
        color: #001840;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .tbl-official-students-view .btn-primary {
        background-color:  #f2f8fc;
        color: #001840;
    }

    .tbl-official-students-view .btn-primary:hover {
        background-color: #f5c400;
        color: #001840;
    }

    .tbl-official-students-view .btn-danger {
        background-color: #001840; ;
        color: #f2f8fc;
    }

    .tbl-official-students-view .btn-danger:hover {
        background-color: #f5c400;
        color: #001840;
    }

    /* Styling for the DetailView widget */
    .tbl-official-students-view .detail-view {
      
        width: 100%;
        border-collapse: collapse;
        border-radius: 20px;
        box-shadow: 5px 5px 15px rgba(0.5, 0.5, 0.5, 20);
        overflow: hidden;
        font-family:  "Montserrat", sans-serif;
    }

    /* Table styling for DetailView */
    .tbl-official-students-view table {
        background-color: #001840;
        color: white;
        text-align: center;
        font-weight: bold;
        padding: 10px;
    }

    .tbl-official-students-view th,
    .tbl-official-students-view td {
        background-color: #001840;
        color: white;
        text-align: center;
        font-weight: bold;
        padding: 10px;
    }

    .tbl-official-students-view th {
        background-color: #f2f8fc;
        font-weight: bold;
        color: #001840;
    }

    .tbl-official-students-view td {
        background-color: #001840;
        color: #ddd;
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }
</style>
