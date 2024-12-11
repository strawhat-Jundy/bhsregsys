<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\summary $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-summary-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'summary_id') ?>

    <?= $form->field($model, 'Schedule_ID') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'weekday_id') ?>

    <?php // echo $form->field($model, 'time_id') ?>

    <?php // echo $form->field($model, 'student_ids') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
