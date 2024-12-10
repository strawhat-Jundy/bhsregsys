<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */

$this->title = 'Update Tbl Official Final Schedule: ' . $model->Schedule_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Final Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Schedule_ID, 'url' => ['view', 'Schedule_ID' => $model->Schedule_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-official-final-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
