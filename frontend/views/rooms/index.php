<?php

use frontend\models\BalingasaHighSchoolRooms;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\rooms\roomsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balingasa High School Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-rooms-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Balingasa High School Rooms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'room_id',
            'Room',
            'Floor',
            'Building',
            'Room_Number',
            //'Description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BalingasaHighSchoolRooms $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'room_id' => $model->room_id]);
                 }
            ],
        ],
    ]); ?>


</div>
