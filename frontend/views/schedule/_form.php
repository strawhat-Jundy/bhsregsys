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
        'id' => 'subjects-dropdown',
        'prompt' => 'Select a Subject',
    ])->label('Subject Name')
    ?>
    


    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'weekday_id')->textInput() ?>

    <?= $form->field($model, 'time_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); 

    $this->registerJs("
    // jQuery to populate the dropdown with students
    $.ajax({
        url: '/bhsregsys2/frontend/web/subjects/get-subjects/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#subjects-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a subjects</option>'); // Add the default option
            
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

    // JavaScript function to update teacher ID in the input field
    function updateTeacherId() {
        // Get the selected option from the teacher dropdown
        var teacherDropdown = document.getElementById('teacher-dropdown');
        var selectedValue = teacherDropdown.value;

        // Set the text input value to the selected teacher's ID
        var teacherIdInput = document.getElementById('teacher_id_input');
        teacherIdInput.value = selectedValue;
    }

    // Event handler for the teacher dropdown to update the teacher ID input field
    $('#teacher-dropdown').on('change', function() {
        updateTeacherId(); // Call the updateTeacherId function when the dropdown changes
    });



", \yii\web\View::POS_READY);

?>