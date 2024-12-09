<?php

use frontend\models\BalingasaHighSchoolStudents;
use frontend\models\BalingasaHighSchoolTeachers;
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
        \yii\helpers\ArrayHelper::map(BalingasaHighSchoolTeachers::find()->all(), 'id', function ($Teachers) {
                return $teachers->first_name . ' ' . $teachers->last_name;
            }),
        ['prompt' => 'Select Teacher'] // Optional: 'prompt' is the default option shown in the dropdown
    )->label('Teacher Name') ?>

    <?php if ($this->context->action->id !== 'create'): ?>
        <?= $form->field($model, 'students')->dropDownList(
            \yii\helpers\ArrayHelper::map(BalingasaHighSchoolStudents::find()->all(), 'id', function ($students) {
                    return $students->first_name . ' ' . $students->last_name;
                }),
            ['multiple' => 'multiple', 'size' => 6]
        )->label('Students') ?>
    <?php endif; ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- kay kenneth ito -->

<!--?php

use frontend\models\Students;
use frontend\models\Teachers;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolSubjects $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="balingasa-high-school-subjects-form">

  

  <!?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'teacher_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(Teacher::find()->all(), 'id', function ($teachers) {
                return $teachers->first_name . ' ' . $teachers->last_name;
            }),
        ['prompt' => 'Select Teacher'] // Optional: 'prompt' is the default option shown in the dropdown
    )->label('Teacher Name') ?>

<?php if ($this->context->action->id !== 'create'): ?>
<?= $form->field($model, 'students')->dropDownList(
            \yii\helpers\ArrayHelper::map(Student::find()->all(), 'id', function ($students) {
                    return $students->first_name . ' ' . $students->last_name;
                }),
            ['multiple' => 'multiple', 'size' => 6]
        )->label('Students') ?>
<?php endif; ?>

    <?= $form->field($model, 'schedule_day')->textInput(['maxlength' => true]) ?>
=======
>>>>>>> d5c19bb201b53749ac549f89a45a72d14e3401da

    <!?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <!?= $form->field($model, 'schedule_day')->textInput(['maxlength' => true]) ?>

    <!?= $form->field($model, 'schedule_time')->textInput(['maxlength' => true]) ?>

    <!?= $form->field($model, 'room')->textInput(['maxlength' => true]) ?> -->

    <!--div class="form-group">
        <!?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <!?php ActiveForm::end(); ?>

</div>
