<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TblOfficialTeachers $model */

$this->title = 'Create Teacher';
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
