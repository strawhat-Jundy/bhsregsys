<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-final-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'student_id')->textInput() ?> -->
    <?= $form->field($model, 'student_id')->dropDownList([], [
        'id' => 'student-dropdown',
        'prompt' => 'Select a Student',
    ])->label('Student Name')
    ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>
    <?= $form->field($model, 'subject_id')->dropDownList([], [
        'id' => 'subjects-dropdown',
        'prompt' => 'Select a Student',
        'onchange' => 'updateSubjectId()',
    ])->label('Subject Name')
    ?>

    <?= $form->field($model, 'teacher_id')->dropDownList([], [
        'id' => 'teacher-dropdown',
        'prompt' => 'Select a Teacher',
        'onchange' => 'updateTeacherId()',
    ])->label("Teacher's Surname") ?>

    <?= $form->field($model, 'teacher_id')->textInput([
        'id' => 'teacher_id_input',
        'readonly' => true, // Makes the text input read-only
    ])->label('Teacher ID') ?>



    <?= $form->field($model, 'room_id')->dropDownList([], [
        'id' => 'room-dropdown',
        'prompt' => 'Select a Room',
    ])->label('Room')
    ?>

    <?= $form->field($model, 'status_id')->dropDownList([], [
        'id' => 'status-dropdown',
        'prompt' => 'Select a status',
    ])->label('Status')
    ?>

    <?= $form->field($model, 'weekday_id')->dropDownList([], [
        'id' => 'weekday-dropdown',
        'prompt' => 'Select from Monday to Sunday',
    ])->label('Day')
    ?>

    <!-- <?= $form->field($model, 'status_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'weekday_id')->textInput() ?>

    <?= $form->field($model, 'time_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end();
    //script

    $this->registerJs("
    // jQuery to populate the dropdown with students
    $.ajax({
        url: '/bhsregsys2/frontend/web/students/get-students/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#students-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a student</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(student_id, last_name) {
                dropdown.append('<option value=\"' + student_id + '\">' + last_name + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko.');
        }
    });

    // jQuery to populate the dropdown with teachers
    $.ajax({
        url: '/bhsregsys2/frontend/web/teachers/get-teachers/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#teacher-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Teacher</option>'); // Add the default option
            
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


     // jQuery to update the text input with the teacher_id when a teacher is selected
    $('#teacher-dropdown').on('change', function() {
        var selectedTeacherId = $(this).val(); // Get the selected teacher_id
        $('#teacher_id').val(selectedTeacherId); // Set the value of the text input field with teacher_id
    });
   
    // // jQuery to update the hidden input field with teacher_id when a teacher is selected
    // $('#teacher-dropdown').on('change', function() {
    //     var selectedTeacherId = $(this).val(); // Get the selected teacher_id
    //     $('#teacher_id').val(selectedTeacherId); // Set the value of the hidden input field
    // });




 // jQuery to populate the dropdown with room
    $.ajax({
        url: '/bhsregsys2/frontend/web/rooms/get-room/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#room-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Room</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(room_id, Room_Number) {
                dropdown.append('<option value=\"' + room_id + '\">' + Room_Number + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('Error in room');
        }
    });

    // jQuery to populate the dropdown with status
    $.ajax({
        url: '/bhsregsys2/frontend/web/status/get-status/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#status-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a status</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(status_id, Status) {
                dropdown.append('<option value=\"' + status_id + '\">' + Status + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('ayaw ng status');
        }
    });

    // jQuery to populate the dropdown with WEEKDAY
    $.ajax({
        url: '/bhsregsys2/frontend/web/weekday/get-weekday/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#weekday-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select from Monday to Sunday</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(weekday_id, Day) {
                dropdown.append('<option value=\"' + weekday_id + '\">' + Day + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('ayaw ng weekdays');
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