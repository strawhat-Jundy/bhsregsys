<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolStudents $model */

$this->title = 'Update Balingasa High School Students: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'student_id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="balingasa-high-school-students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
