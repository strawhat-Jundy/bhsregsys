<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolStudents $model */

$this->title = 'Create Balingasa High School Students';
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-students-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
