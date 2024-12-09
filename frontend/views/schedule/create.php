<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialFinalSchedule $model */

$this->title = 'Create Official Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Official Final Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

// $this->registerJs("
//     // jQuery to populate the dropdown with students
//     $.ajax({
//         url: '/your-controller/get-students', // Adjust the URL to match your controller/action
//         type: 'GET',
//         success: function(data) {
//             var dropdown = $('#student-dropdown');
//             dropdown.empty(); // Clear existing options
//             dropdown.append('<option value=\"\">Select a Student</option>'); // Add the default option
            
//             // Loop through the returned data and append to dropdown
//             $.each(data, function(id, name) {
//                 dropdown.append('<option value=\"' + id + '\">' + name + '</option>');
//             });
//         },
//         error: function() {
//             alert('Error loading students.');
//         }
//     });
// ", \yii\web\View::POS_READY);

?>
<div class="tbl-official-final-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
