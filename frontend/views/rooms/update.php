<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolRooms $model */

$this->title = 'Update Balingasa High School Rooms: ' . $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->room_id, 'url' => ['view', 'room_id' => $model->room_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="balingasa-high-school-rooms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
