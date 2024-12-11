<?php

use frontend\models\TblOfficialStudents;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\students\studentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Official Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Official Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'student_id',
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
                'urlCreator' => function ($action, TblOfficialStudents $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'student_id' => $model->student_id]);
                 }
            ],
        ],
    ]); ?>


</div>
