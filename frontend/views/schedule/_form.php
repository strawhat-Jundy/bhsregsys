<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-final-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>
    
    <?= $form->field($model, 'subject_id')->dropDownList([], [
    'id' => 'student-dropdown',
    'prompt' => 'Select a Student',
    ]);
    
    ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->dropDownList([], [
    'id' => 'teacher-dropdown',
    'prompt' => 'Select a Teacher',
    ]);
    
    ?>
    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'weekday_id')->textInput() ?>

    <?= $form->field($model, 'time_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); 
//script
    $this->registerJs("
    // jQuery to populate the dropdown with students
    $.ajax({
        url: '/bhsregsys2/frontend/web/subject/get-subjects/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#student-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Student</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(subject_id, subject_name) {
                dropdown.append('<option value=\"' + subject_id + '\">' + subject_name + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko.');
        }
    });
", \yii\web\View::POS_READY);


$this->registerJs("
// jQuery to populate the dropdown with students
$.ajax({
    url: '/bhsregsys2/frontend/web/teachers/get-teachers/', // Adjust the URL to match your controller/action
    type: 'GET',
    success: function(data) {
        var dropdown = $('#student-dropdown');
        dropdown.empty(); // Clear existing options
        dropdown.append('<option value=\"\">Select a Student</option>'); // Add the default option
        
        // Loop through the returned data and append to dropdown
        $.each(data, function(teacher_id, last_name) {
            dropdown.append('<option value=\"' + teacher_id + '\">' + last_name + '</option>');
            console.log(data);
        });
    },
    error: function() {
        alert('naglibog na ko.');
    }
});
", \yii\web\View::POS_READY);

?>
</div>