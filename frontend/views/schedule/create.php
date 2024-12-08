<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BHSSchedule $model */

$this->title = 'Create Bhs Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Bhs Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bhsschedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
