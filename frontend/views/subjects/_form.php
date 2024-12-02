<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolSubjects $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="balingasa-high-school-subjects-form">

  

  <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
