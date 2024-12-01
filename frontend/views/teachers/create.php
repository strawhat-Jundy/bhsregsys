<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolTeachers $model */

$this->title = 'Create Balingasa High School Teachers';
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-teachers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
