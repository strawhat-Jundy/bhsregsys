<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialRoomTable $model */

$this->title = 'Create Tbl Official Room Table';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Room Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-official-room-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
