<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolTeachers $model */

$this->title = 'Update Balingasa High School Teachers: ' . $model->teacher_id;
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_id, 'url' => ['view', 'teacher_id' => $model->teacher_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="balingasa-high-school-teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
