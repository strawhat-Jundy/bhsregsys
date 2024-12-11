<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalingasaHighSchoolRooms $model */

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&display=swap", ['position' => \yii\web\View::POS_HEAD]);

$this->registerCssFile("https://fonts.googleapis.com/css2?family=Chonburi&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Miss+Fajardose&family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", ['position' => \yii\web\View::POS_HEAD]);


$this->title = ' ADD NEW BHS ROOMS';
$this->params['breadcrumbs'][] = ['label' => 'Balingasa High School Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="balingasa-high-school-rooms-create">

    <h1 class="custom-title" ><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<!-- Internal CSS -->
<style>
 body {
        background-image: url('https://lh3.googleusercontent.com/pw/AP1GczM7c7yBTlLpjPEWRXC66i45xwIr35nFQ6Y-1H8OAdDf-rHYByT6lHgKdQCYMxZcDzOwD8wpxqGrbU9LCI0AVb0u6NZOsbg7T04vP_8XgH8Y36Q1R0QXYabCBnBI3hoXoggagvKeHx-Gjx7bKSoXx8iv=w987-h1316-s-no-gm?authuser=0'); /* Replace this link */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .custom-title {
        font-size: 55px;
        font-family: "Orbitron", serif;
        font-weight: bold;
        color: #001840; 
        text-align: center; 
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        margin-top: 40px;
        margin-bottom: 20px;
        border-radius: 40px;
    }

    /* Styling for the form */
    .balingasa-high-school-rooms-create form {
        background-color:  #001840;
        padding: 20px;
        border-radius: 25px;
        box-shadow: 0 4px 8px rgba(20, 20, 20, 20);
        text-align: center; 
        color: white; 
        font-weight: bold; 
        font-family: "Montserrat", sans-serif;

    }

    /* Change input field background and text color */
    .balingasa-high-school-rooms-create input,
    .balingasa-high-school-rooms-create select,
    .balingasa-high-school-rooms-create textarea {
        background-color: #f2f8fc;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 10px;
        width: 100%;
        margin-bottom: 15px;
    }

    /* Change button color */
    .balingasa-high-school-rooms-create .form-group button {
        background-color: #f5c400;
        color: #001840;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
    }

    /* Button hover effect */
    .balingasa-high-school-rooms-create .form-group button:hover {
        background-color: #102a71;
        color: #f5c400     }
</style>
