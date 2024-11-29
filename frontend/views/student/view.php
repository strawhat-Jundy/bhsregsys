<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Student $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'first_name',
            'last_name',
            'email:email',
            'gender',
            [
                'label' => 'Subjects', // Custom label for subjects
                'value' => function ($model) {

                    // Get the related subjects via the student-subject relationship
                    $subjects = $model->studentSubjects;
                    // Extract the subject names
                    $subjectNames = [];
                    foreach ($subjects as $studentSubject) {
                        $subjectNames[] = $studentSubject->subject->subject_name; // Assuming the 'subject' relation exists in StudentSubject
                    }
                    // Return a comma-separated list of subject names
                    return implode(', ', $subjectNames);
                },
            ],
        ],
    ]) ?>

</div>
