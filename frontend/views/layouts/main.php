<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\Helpers\Url;
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
        
/* HEADER SECTION CSS */

header {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  background-color: #001840;
  box-shadow: 0 0 1em rgba(255, 255, 255, 0.693);
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  font-family: "Manrope", sans-serif;
  font-weight: 600;
  z-index: 999;
}
header img {
  width: 75px;
  cursor: pointer;
}
nav {
  position: relative;
  top: 1vmin;
}
nav ul {
  display: flex;
}
nav li {
  list-style: none;
  font-size: 1rem;
}
nav li > a {
  padding-inline: 0.7em;
  padding-block: 1.2em;
  color: #efefef;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.2s ease;
}
nav li > a:hover {
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
  padding: 0.7em 1.2em;
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
.sidebar {
  background-color: #001740dc;
  position: fixed;
  top: 0;
  right: 0;
  padding: 3em 1.5em 1.5em;
  height: 100vh;
  width: 250px;
  z-index: 999;
  display: none;
  flex-direction: column;
  gap: 5em;
  box-shadow: 0 0 3em black;
}
.sidebar > li {
  padding: 0.8em;
}
.ekis {
  display: flex;
  justify-content: flex-end;
}
.sidebarnav {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1.5em;
}
.ri-close-line {
  color: #efefef;
  font-size: 2rem;
  cursor: pointer;
  transition: all 0.2s ease;
}
.ri-close-line:hover {
  background-color: #02358e4b;
  opacity: 0.8;
}
.menu-button {
  color: #efefef;
  list-style: none;
  cursor: pointer;
  transition: all 0.2s ease;
  font-size: 1.8em;
  display: none;
}
.copy {
  color: #a8a8a8;
  font-size: 0.8rem;
  text-align: center;
  margin-top: 8em;
}
@media (max-width: 945px) {
  header img {
    width: 60px;
  }
  .menu-button {
    display: inline;
  }
  .hideon-mobile {
    display: none;
  }
}

    </style>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <header>
        <a href="/bhsregsys2/frontend/web/index.php/">
            <img src="<?= Url::to('@web/images/logo.png')?>">
        </a>
        <nav>
            <ul class="sidebar">
                <div class="ekis">
                    <li onclick="hideSidebar()"><i class="ri-close-line"></i></li>
                </div>
                <div class="sidebarnav">
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/">Home</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/students">Student</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/schedule">Schedule</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/rooms">Room</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/teachers">Teacher</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/subjects">Subject</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/summary">Summary</a></li>
                    <li onclick="hideSidebar"><a href="/bhsregsys2/frontend/web/index.php/site/signup">Sign up</a></li>
                    <li onclick="hideSidebar" class="login"><a href="/bhsregsys2/frontend/web/index.php/site/login">Log In</a></li>
                </div>
                <div class="copy">
                    &copy; 2024 All Rights Reserved <br> Balingasa High School 12-ICT OCTAV8
                </div>
            </ul>
            <ul class="hideon-mobile">
                <li><a href="/bhsregsys2/frontend/web/index.php/">Home</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/students">Students</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/schedule">Schedule</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/rooms">Rooms</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/teachers">Teacher</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/subjects">Subject</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/summary">Summary</a></li>
                
            </ul>
        </nav>
        <div class="registration hideon-mobile">
            <a href="/bhsregsys2/frontend/web/index.php/site/signup" class="sign-up">Sign up</a>
            <a href="/bhsregsys2/frontend/web/index.php/site/login" class="classname btn-yellow classname login" id="">Log In</a>
        </div>
        <li class="menu-button" onclick="showSidebar()">
            <i class="ri-menu-line"></i>
          </li>
    </header>
    <!--This is a  <header>
        <a href="">
            <img src="<?= Url::to("@web/images/logo.png")?>">
        </a>
        <nav>
            <ul>
                <li><a href="/bhsregsys2/frontend/web">Home</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/students">Student</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/schedule">Schedule</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/rooms">Room</a></li>   
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/teachers">Teacher</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/subjects">Subject</a></li>
                <li><a href="/bhsregsys2/frontend/web/index.php/index.php/summary">Summary</a></li>
            </ul>
        </nav>
        <div class="registration">
            <a href="" class="sign-up">Sign up</a>
            <button class="btn-yellow">Log In</button>
        </div>
    </header> -->

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
