<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolTeachers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="balingasa-high-school-teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); 
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
?>
</div>
