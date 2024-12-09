<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialRoomTable $model */

$this->title = 'Update Tbl Official Room Table: ' . $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Room Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->room_id, 'url' => ['view', 'room_id' => $model->room_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-official-room-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
