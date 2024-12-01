<?php

use frontend\models\BalingasaHighSchoolSubjects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\subject\subjectsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balingasa High School Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-subjects-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Balingasa High School Subjects', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, BalingasaHighSchoolSubjects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'subject_id' => $model->subject_id]);
                 }
            ],
        ],
    ]); ?>


</div>
