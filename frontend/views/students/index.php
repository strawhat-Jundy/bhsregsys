<?php

use frontend\models\BalingasaHighSchoolStudents;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\student\studentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Balingasa High School Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Balingasa High School Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_id',
            'lrn',
            'first_name',
            'last_name',
            'gender',
            //'birthdate',
            //'place_of_birth',
            //'address',
            //'religion',
            //'email:email',
            //'civil_status',
            //'nationality',
            //'language',
            //'middle_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BalingasaHighSchoolStudents $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'student_id' => $model->student_id]);
                 }
            ],
        ],
    ]); ?>


</div>
