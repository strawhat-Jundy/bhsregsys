<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialTeachers $model */

$this->title = 'Update Tbl Official Teachers: ' . $model->teacher_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_id, 'url' => ['view', 'teacher_id' => $model->teacher_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-official-teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
