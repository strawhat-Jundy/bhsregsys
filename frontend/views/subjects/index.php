<?php

use frontend\models\TblOfficialSubjects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\subjects\StudentTableSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Official Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-subjects-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Official Subjects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'subject_id',
            'subject_name',
            'schedule_day',
            'schedule_time',
            'room',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblOfficialSubjects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'subject_id' => $model->subject_id]);
                 }
            ],
        ],
    ]); ?>


</div>
