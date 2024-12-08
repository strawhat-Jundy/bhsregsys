<?php

use frontend\models\BalingasaHighSchoolTeachers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\teacher\teachersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balingasa High School Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Balingasa High School Teachers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher_id',
            'first_name',
            'last_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BalingasaHighSchoolTeachers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'teacher_id' => $model->teacher_id]);
                 }
            ],
        ],
    ]); ?>


</div>
