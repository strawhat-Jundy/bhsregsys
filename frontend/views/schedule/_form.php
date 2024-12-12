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
    


    <!-- <?= $form->field($model, 'teacher_id')->textInput() ?> -->
    <?= $form->field($model, 'teacher_id')->dropDownList([], [
        'id' => 'teachers-dropdown',
        'prompt' => 'Select a Teacher',
    ])->label('Teacher Name')
    ?>
   

    <!-- <?= $form->field($model, 'room_id')->textInput() ?> -->
    <?= $form->field($model, 'room_id')->dropDownList([], [
        'id' => 'room-dropdown',
        'prompt' => 'Select a Room',
    ])->label('Room')
    ?>

    <!-- <?= $form->field($model, 'student_id')->textInput() ?> -->
    <?= $form->field($model, 'student_id')->dropDownList([], [
        'id' => 'students-dropdown',
        'prompt' => 'Select a Student',
    ])->label('Student')
    ?>

    <!-- <?= $form->field($model, 'status_id')->textInput() ?> -->
    <?= $form->field($model, 'status_id')->dropDownList([], [
        'id' => 'status-dropdown',
        'prompt' => 'Select a Status',
    ])->label('Status')
    ?>

    <!-- <?= $form->field($model, 'weekday_id')->textInput() ?> -->
    <?= $form->field($model, 'weekday_id')->dropDownList([], [
        'id' => 'weekday-dropdown',
        'prompt' => 'Select a Weekday',
    ])->label('Weekday')
    ?>

    <!-- <?= $form->field($model, 'time_id')->textInput() ?> -->
    <?= $form->field($model, 'time_id')->dropDownList([], [
        'id' => 'time-dropdown',
        'prompt' => 'Select a Time',
    ])->label('Timeday')
    ?>

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
        url: '/bhsregsys2/frontend/web/rooms/get-room/', // Adjust the URL to match your controller/action
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

      // jQuery to populate the dropdown with status
    $.ajax({
        url: '/bhsregsys2/frontend/web/status/get-status/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#status-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Status</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(status_id, Status) {
                dropdown.append('<option value=\"' + status_id + '\">' + Status + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko. students ');
        }
    });
    
      // jQuery to populate the dropdown with weekday
    $.ajax({
        url: '/bhsregsys2/frontend/web/weekday/get-weekday/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#weekday-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Weekday</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(weekday_id, Day) {
                dropdown.append('<option value=\"' + weekday_id + '\">' + Day + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko. day ');
        }
    });

     // jQuery to populate the dropdown with time
    $.ajax({
        url: '/bhsregsys2/frontend/web/time/get-time/', // Adjust the URL to match your controller/action
        type: 'GET',
        success: function(data) {
            var dropdown = $('#time-dropdown');
            dropdown.empty(); // Clear existing options
            dropdown.append('<option value=\"\">Select a Time</option>'); // Add the default option
            
            // Loop through the returned data and append to dropdown
            $.each(data, function(time_id, Time_Schedule) {
                dropdown.append('<option value=\"' + time_id + '\">' + Time_Schedule + '</option>');
                console.log(data);
            });
        },
        error: function() {
            alert('naglibog na ko. day ');
        }
    });



   


", \yii\web\View::POS_READY);

?>