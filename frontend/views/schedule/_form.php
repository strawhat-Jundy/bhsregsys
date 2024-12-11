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
    <?= $form->field($model, 'teacher_id')->dropDownList([], [
        'id' => 'teachers-dropdown',
        'prompt' => 'Select a Teacher',
    ])->label('Teacher Name')
    ?>
   

    <?= $form->field($model, 'room_id')->textInput() ?>
    <?= $form->field($model, 'room_id')->dropDownList([], [
        'id' => 'room-dropdown',
        'prompt' => 'Select a Room',
    ])->label('Room')
    ?>

    <?= $form->field($model, 'student_id')->textInput() ?>
    <?= $form->field($model, 'student_id')->dropDownList([], [
        'id' => 'students-dropdown',
        'prompt' => 'Select a Student',
    ])->label('Student')
    ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'weekday_id')->textInput() ?>

    <?= $form->field($model, 'time_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); 

    $this->registerJs("
    // jQuery to populate the dropdown with subjects
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
            alert('naglibog na ko. subjects');
        }
    });

     // jQuery to populate the dropdown with teachers
    $.ajax({
        url: '/bhsregsys2/frontend/web/teachers/get-teachers/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#teachers-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a teacher</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(teacher_id, last_name) {
                dropdown.append('<option value=\"' + teacher_id + '\">' + last_name + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko. teachers');
        }
    });

     // jQuery to populate the dropdown with room
    $.ajax({
        url: '/bhsregsys2/frontend/web/room/get-room/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#room-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a room</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(room_id, Room) {
                dropdown.append('<option value=\"' + room_id + '\">' + Room + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('room');
        }
    });

     // jQuery to populate the dropdown with students
    $.ajax({
        url: '/bhsregsys2/frontend/web/students/get-students/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#students-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a students</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(student_id, last_name) {
                dropdown.append('<option value=\"' + student_id + '\">' + last_name + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko. students ');
        }
    });


   


", \yii\web\View::POS_READY);

?>