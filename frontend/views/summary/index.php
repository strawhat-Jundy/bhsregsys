<?php

use frontend\models\TblOfficialSummary;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\summary $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Official Summaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-summary-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Official Summary', ['create'], ['class' => 'btn btn-success']) ?>
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
