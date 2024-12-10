<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\subjects\StudentTableSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-subjects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'subject_name') ?>

    <?= $form->field($model, 'schedule_day') ?>

    <?= $form->field($model, 'schedule_time') ?>

    <?= $form->field($model, 'room') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
