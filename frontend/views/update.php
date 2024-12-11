<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialSummary $model */

$this->title = 'Update Tbl Official Summary: ' . $model->summary_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Summaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->summary_id, 'url' => ['view', 'summary_id' => $model->summary_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-official-summary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
