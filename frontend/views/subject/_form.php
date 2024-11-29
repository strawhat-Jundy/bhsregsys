<?php

use frontend\models\Student;
use frontend\models\Teacher;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Subject $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(Teacher::find()->all(), 'id', function ($teacher) {
                return $teacher->first_name . ' ' . $teacher->last_name;
            }),
        ['prompt' => 'Select Teacher'] // Optional: 'prompt' is the default option shown in the dropdown
    )->label('Teacher Name') ?>

    <?php if ($this->context->action->id !== 'create'): ?>
        <?= $form->field($model, 'students')->dropDownList(
            \yii\helpers\ArrayHelper::map(Student::find()->all(), 'id', function ($student) {
                    return $student->first_name . ' ' . $student->last_name;
                }),
            ['multiple' => 'multiple', 'size' => 6]
        )->label('Students') ?>
    <?php endif; ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>