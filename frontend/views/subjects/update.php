<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolSubjects $model */

$this->title = 'Update Balingasa High School Subjects: ' . $model->subject_id;
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subject_id, 'url' => ['view', 'subject_id' => $model->subject_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="balingasa-high-school-subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
