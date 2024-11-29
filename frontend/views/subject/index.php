<?php

use frontend\models\Subject;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\subject\Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subject', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'subject_name',
            [
                'attribute' => 'teacher_name',
                'value' => function ($model) {
                        return $model->teacher->first_name . ' ' . $model->teacher->last_name;
                    },
                'label' => 'Teacher Name',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Subject $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>
</div>