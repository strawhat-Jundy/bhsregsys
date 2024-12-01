<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolRooms $model */

$this->title = 'Create Balingasa High School Rooms';
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balingasa-high-school-rooms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
