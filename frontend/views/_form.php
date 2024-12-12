<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialSummary $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-summary-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Schedule_ID')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'weekday_id')->textInput() ?>

    <?= $form->field($model, 'time_id')->textInput() ?>

    <?= $form->field($model, 'student_ids')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
