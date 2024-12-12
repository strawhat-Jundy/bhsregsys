<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="my-1 mx-0" style="color:#999;">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<style>
 body {
    background: linear-gradient(45deg, #f5c400, orange);
    display: flex;
    justify-content: center;
       
    }
    #loginform-rememberme{
        width: 25px;
        display: inline;
        margin: 0;
    }
    .form-check{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1em;
    }
.site-login{
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
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
    .site-login form {
        width: 35vw;
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
    .site-login input,
    .site-login select,
    .site-login textarea {
        background-color: #f2f8fc;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 10px;
        width: 100%;
        margin-bottom: 15px;
    }

    /* Change button color
    .balingasa-high-school-rooms-create .form-group button {
        background-color: #f5c400;
        color: #001840;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
    } */

    /* Button hover effect
    .balingasa-high-school-rooms-create .form-group button:hover {
        background-color: #102a71;
        color: #f5c400     } */
</style>