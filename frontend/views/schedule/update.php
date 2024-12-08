<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BHSSchedule $model */

$this->title = 'Update Bhs Schedule: ' . $model->Schedule_ID;
$this->params['breadcrumbs'][] = ['label' => 'Bhs Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Schedule_ID, 'url' => ['view', 'Schedule_ID' => $model->Schedule_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bhsschedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
