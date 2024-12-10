<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        header {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            background-color: #001840;
            /* border-bottom: 2px solid #efefefb6; */
            box-shadow: 0 0 1em rgba(255, 255, 255, 0.693);
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            font-family: 'Manrope', sans-serif;
            font-weight: 600;
            z-index: 999;
        }

        header img {
            width: 75px;
            cursor: pointer;
        }

        nav ul {
            display: flex;
        }

        nav li {
            list-style: none;
            font-size: 1rem;

        }

        nav li>a {
            padding-inline: .7em;
            padding-block: 1.2em;
            color: #efefef;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        nav li>a:hover {
            background-color: #02358e4b;
            opacity: 0.8;
        }

        .registration {
            display: flex;
            align-items: center;
            gap: 1em;
        }

        .sign-up {
            color: #efefef;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .sign-up:hover {
            opacity: 0.6;
        }

        .btn-yellow {
            color: #1f1f1f;
            text-decoration: none;
            background-color: #ffb915;
            padding: .7em 1.2em;
            border-radius: 5%;
            font-size: 1rem;
            font-weight: 700;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 0 1em rgba(0, 0, 0, 0.6);
        }

        .btn-yellow:hover {
            opacity: 0.8;
        }
        .container{
            margin: 0 auto !important;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <a href="">
            <img src="./images/logo.png">
        </a>
        <nav>
            <ul>
                <li><a href="/bhsregsys2/frontend/web">Home</a></li>
                <li><a href="/bhsregsys2/frontend/web/students">Student</a></li>
                <li><a href="/bhsregsys2/frontend/web/schedule">Schedule</a></li>
                <li><a href="/bhsregsys2/frontend/web/rooms">Room</a></li>   
                <li><a href="">Teacher</a></li>
                <li><a href="">Subject</a></li>
                <li><a href="">Summary</a></li>
            </ul>
        </nav>
        <div class="registration">
            <a href="" class="sign-up">Sign up</a>
            <button class="btn-yellow">Log In</button>
        </div>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
    <!-- 
<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer> -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
