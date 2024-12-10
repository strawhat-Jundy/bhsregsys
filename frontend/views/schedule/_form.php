<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-official-final-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'subject_id')->textInput() ?> -->
    
    <?= $form->field($model, 'subject_id')->dropDownList([], [
    'id' => 'student-dropdown',
    'prompt' => 'Select a Student',
    ]);
        
    ?>
<!-- 
    <?= $form->field($model, 'teacher_id')->textInput() ?> -->

    <?= $form->field($model, 'teacher_id')->dropDownList(   [], [
    'id' => 'teacher-dropdown',
    'prompt' => 'Select a Teacher',
    ]);
    
    ?>

<?= $form->field($model, 'room_id')->dropDownList(   [], [
    'id' => 'room-dropdown',
    'prompt' => 'Select a Room',
    ]);
    
    // ?>
    // <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    // added new droplist

  

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

", \yii\web\View::POS_READY);



?>
</div>