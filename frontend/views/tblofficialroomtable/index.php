<?php

use frontend\models\TblOfficialRoomTable;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialRoomTableSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Official Room Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-room-table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Official Room Table', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, TblOfficialRoomTable $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'room_id' => $model->room_id]);
                 }
            ],
        ],
    ]); ?>


</div>
