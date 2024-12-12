<?php

use frontend\models\TblOfficialSummary;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\summary $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&display=swap", ['position' => \yii\web\View::POS_HEAD]);

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Miss+Fajardose&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", ['position' => \yii\web\View::POS_HEAD]);

$this->title = 'Balingasa High School Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-summary-index">

    <h1 class="custom-title"><?= Html::encode($this->title) ?></h1>

    <p class="create-room">
        <?= Html::a('Create Tbl Official Summary', ['create'], ['class' => 'btn btn-success custom-create-btn']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'summary_id',
            'Schedule_ID',
            'subject_id',
            'teacher_id',
            'room_id',
            //'status_id',
            //'weekday_id',
            //'time_id:datetime',
            //'student_ids:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblOfficialSummary $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'summary_id' => $model->summary_id]);
                 }
            ],
        ],
    ]); ?>


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
            font-family: "Chonburi", serif;
            font-weight: bold;
            color: #001840; 
            text-align: center;
            text-decoration: underline ; 
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            margin-top: 40px;     
            margin-bottom: 15px;       
            border-radius: 40px;
        }

        .create-room {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 0px;
}

    .custom-create-btn {

        background-color: #001840;
        color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 15px; 
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 20);
        }

        .custom-create-btn:hover {
            background-color: #f5c400; 
            color:  #001840;
            text-decoration: none;
            
        }

   
    
     
      .grid-view table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 20px;
        box-shadow: 5px 5px 15px rgba(0.5, 0.5, 0.5, 20);
        overflow: hidden;
        font-family:  "Montserrat", sans-serif;
    }

    


    .grid-view th {
        background-color: #001840;
        color: white;
        text-align: center;
        font-weight: bold;

        padding: 10px;
       
    }

    .grid-view td {
        background-color: #001840;
        color: #ddd;
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }

    .grid-view tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .grid-view tr:hover {
        background-color: #ddd;
    }

    .grid-view .yii-grid-action-column a {
        color: #007BFF;
    }

    .grid-view .yii-grid-action-column a:hover {
        text-decoration: underline;
    }

</style>


