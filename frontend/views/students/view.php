<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolStudents $model */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="balingasa-high-school-students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'student_id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'student_id' => $model->student_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'student_id',
            'lrn',
            'first_name',
            'last_name',
            'gender',
            'birthdate',
            'place_of_birth',
            'address',
            'religion',
            'email:email',
            'civil_status',
            'nationality',
            'language',
            'middle_name',
        ],

// NILAGAY NI KEN
        'label' => 'Subjects', // Custom label for subjects
        'value' => function ($model) {
     
        // Get the related subjects via the student-subject relationship
        $subjects = $model->studentsSubjects;
        // Extract the subject names
        $subjectNames = [];
        foreach ($subjects as $studentsSubjects) {
        $subjectNames[] = $studentsSubjects->subject->subject_name; // Assuming the 'subject' relation exists in StudentsSubject
        }
        // Return a comma-separated list of subject names
        return implode(', ', $subjectNames);
        }, 
    ]) ?>

</div>
