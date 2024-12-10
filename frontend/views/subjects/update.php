<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialSubjects $model */

$this->title = 'Update Tbl Official Subjects: ' . $model->subject_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subject_id, 'url' => ['view', 'subject_id' => $model->subject_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-official-subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
