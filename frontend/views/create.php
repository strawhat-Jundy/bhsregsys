<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialSummary $model */

$this->title = 'Create Tbl Official Summary';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Summaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-summary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
