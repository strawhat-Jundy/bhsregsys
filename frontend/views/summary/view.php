<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialSummary $model */

$this->title = $model->summary_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Summaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-official-summary-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'summary_id' => $model->summary_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'summary_id' => $model->summary_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'summary_id',
            'Schedule_ID',
            'subject_id',
            'teacher_id',
            'room_id',
            'status_id',
            'weekday_id',
            'time_id:datetime',
            'student_ids:ntext',
        ],
    ]) ?>

</div>
