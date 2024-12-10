<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialRoomTable $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-room-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Floor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Building')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Room_Number')->textInput() ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
