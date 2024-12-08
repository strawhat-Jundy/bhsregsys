<?php
// @var yii\web\View $this
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHS Registry System</title>
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl?>/css/style.css">
    <link rel="icon" href="/registry.system/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <header>
        <a href="">
            <!-- <img src="/registry.system/images/logo.png" alt="BHS REGISTRY SYSTEM LOGO"> -->
            <img src="<?= Url::to('@web/images/images/logo.png')?>" alt="BHS REGISTRY SYSTEM LOGO">
        </a>
        <nav>
            <ul>
                <li><a href="/bhsregsys2/frontend/web">Home</a></li>
                <li><a href="/bhsregsys2/frontend/web/students">Student</a></li>
                <li><a href="">Schedule</a></li>
                <li><a href="">Room</a></li>
                <li><a href="">Teacher</a></li>
                <li><a href="">Subject</a></li>
                <li><a href="">Summary</a></li>
                

            </ul>
        </nav>
        <div class="registration">
            <a href="" class="sign-up">Sign up</a>
            <button class="btn-yellow" id="">Log In</button>
        </div>
    </header>
    <main>
        <div id="hero">
            <div class="hero-text">
                <div>
                    <h1>Balingasa High School</h1>
                    <h2>Registry System</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus <br> illo, vel repellendus quas laudantium quisquam perspiciatis <br> culpa ex sed ipsum ab illum ipsam optio hic ad est iusto cum.</p>
                <button class="btn-yellow learn" id="goAbout">Learn more</button>
            </div>
            <div class="hero-img">
            </div>
        </div>
        <div id="about">
            <h2 class="about-ttl">About us</h1>
                <div class="about-container">
                    <div class="image-wrapper-abt">
                    </div>
                    <div class="text-wrapper-abt">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, consequuntur natus vitae quod dolorum aliquam nisi tempore obcaecati debitis quam cum sint autem et! Cupiditate ipsa ipsam sapiente dolor voluptatibus!
                        Tempora voluptatem maiores debitis? Natus necessitatibus omnis itaque iusto animi officiis eius, quo laboriosam temporibus architecto libero reprehenderit ab iste pariatur ex asperiores culpa quae doloremque, quaerat incidunt numquam maxime!
                        Obcaecati, laudantium! Quasi nihil, impedit quidem ipsum, dignissimos quod minima eligendi sapiente quam, mollitia sit eveniet omnis suscipit illum amet reprehenderit velit architecto necessitatibus ab iste qui! Provident, illum consequatur.
                    </div>
                </div>
        </div>
        <div id="people">
            <h2 class="people-ttl">Website Developers</h2>
            <div class="card-container">
                <div class="card card1">
                    <!-- <img src="/registry.system/images/cholo-card.png" alt="Van Cholo Esguerra"> -->
                    <img src="<?= Url::to('@web/images/images/cholo-card.png')?>" alt="Van Cholo Esguerra">
                    <div class="links5">
                        <a href="https://chocoacocoa.github.io/Van-Cholo---Profile/" target="_blank"><i class="ri-pages-line"></i></a>
                        <a href="https://www.facebook.com/vancholo.esguerra.5/" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://github.com/chocoacocoa" target="_blank"><i class="ri-github-fill"></i></a>
                        <a href="https://www.youtube.com/@choco6002" target="_blank"><i class="ri-youtube-line"></i></a>
                        <a href="https://www.instagram.com/vancholo_/" target="_blank"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
                <div class="card card2">
                    <img src="<?= Url::to('@web/images/images/cudia-card.png')?>" alt="Lucky Vincent Cudia">
                    <div class="links3">
                        <a href="https://www.facebook.com/luckyvincent.cudia?mibextid=ZbWKwL" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://github.com/Cudia0" target="_blank"><i class="ri-github-fill"></i></a>
                        <a href="https://youtube.com/@luckyvincentcudia9764" target="_blank"><i class="ri-youtube-line"></i></a>
                    </div>
                </div>
                <div class="card card3">
                    <img src="<?= Url::to('@web/images/images/ken-card.png')?>" alt="Julius Peralta">
                    <div class="links">
                        <a href="#" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </div>
                </div>
                <div class="card card4">
                    <img src="<?= Url::to('@web/images/images/rogon-card.png')?>" alt="Leonel Rogon">
                    <div class="links5">
                        <a href="https://rogondotdev.github.io/personal-portfolio/" target="_blank"><i class="ri-pages-line"></i></a>
                        <a href="https://www.facebook.com/rogon.dev" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://github.com/rogondotdev" target="_blank"><i class="ri-github-fill"></i></a>
                        <a href="https://www.linkedin.com/in/leonel-rogon-9616a7332/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                        <a href="https://www.instagram.com/rogondotdev/" target="_blank"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
                <div class="card card5">
                    <img src="<?= Url::to('@web/images/images/ken-card.png')?>" alt="Kenneth Apolong">
                    <div class="links">
                        <a href="#" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card card1">
                    <img src="<?= Url::to('@web/images/images/toledo-card.png')?>" alt="Hillary Mhyles Toledo">
                    <div class="links3">
                        <a href="https://www.facebook.com/share/6s5ZNDhg7dAgBaFA/?mibextid=LQQJ4d" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://www.instagram.com/colorshin77?igsh=Y3d0dXJ3NWQ4eHdm&utm_source=qr" target="_blank"><i class="ri-instagram-line"></i></a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fgithub.com%2FButterHoney-mhyles890%3Ffbclid%3DIwZXh0bgNhZW0CMTEAAR0LG2GU1KVdao7r_zO5QtDGX6dCIjl4H8TfhPERIsXVLY60xQByUGvHiAc_aem_5XnEy5oKPOZgzw2LvGxI6Q&h=AT13Sy0dVPHXLFDHLsSwdfaE8InLUZ52SaoK_wz-j6W0-Fd568AfLG44lgdpbA8IwMNje2k4gYakmwebUT9wkm0rp1jwQN-5qNYhbyHm4sNbXW29o5GAXzpXezFXtrGKCWrZd_R-8WNqXA0&s=1" target="_blank"><i class="ri-github-fill"></i></a>
                    </div>
                </div>
                <div class="card card2">
                    <img src="<?= Url::to('@web/images/images/elaiza-card.png')?>" alt="Elaize Rosario">
                    <div class="links2">
                        <a href="https://www.facebook.com/elaizajane.rosario" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://github.com/ElaizaJanee" target="_blank"><i class="ri-github-fill"></i></a>
                    </div>
                </div>
                <div class="card card3">
                    <img src="<?= Url::to('@web/images/images/jundy-card.png')?>" alt="Sir Jundy Dimasu-ay">
                    <div class="links">
                        <a href="#" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </div>
                </div>
                <div class="card card4">
                    <img src="<?= Url::to('@web/images/images/eloisa-card.png')?>" alt="Eloisa Rosario">
                    <div class="links3">
                        <a href="https://www.facebook.com/eloisajean.rosario.54" target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href="https://github.com/LilJeanie" target="_blank"><i class="ri-github-fill"></i></a>
                        <a href="https://www.instagram.com/eloisajean.14" target="_blank"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
                <div class="card card5">
                    <img src="<?= Url::to('@web/images/images/erin-card.png')?>" alt="Erin Alonzo">
                    <div class="links">
                        <a href="https://www.facebook.com/share/1DXsqNLEfu/?mibextid=qi2Omg" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer>
        <div class="footer-container">
            <div class="logo-foot">
                <img src="<?= Url::to('@web/images/images/logo.png')?>" alt="Balingasa Higb School Registry System">
            </div>
            <div class="links-foot">
                <h2>WEBSITE DEVELOPERS | SPECIAL MENTIONS</h2>
                <div class="footer-names">
                    <div class="developers-container">
                        <div class="developers">
                            <div class="dev dev-one">
                                <h3>Van Cholo Esguerra</h3>
                                <p>&nbsp;&nbsp;&nbsp;Backend Web Developer</p>
                            </div>
                            <div class="dev dev-two">
                                <h3>Lucky Vincent Cudia</h3>
                                <p>&nbsp;&nbsp;&nbsp;Backend Web Developer</p>
                            </div>
                            <div class="dev dev-three">
                                <h3>Kenneth Apolong</h3>
                                <p>&nbsp;&nbsp;&nbsp;Backend Web Developer</p>
                            </div>
                            <div class="dev dev-four">
                                <h3>Leonel Rogon</h3>
                                <p>&nbsp;&nbsp;&nbsp;Frontend Web Developer</p>
                            </div>
                            <div class="dev dev-five">
                                <h3>Hillary Mhyles Toledo</h3>
                                <p>&nbsp;&nbsp;&nbsp;UI/UX & Graphic Designer</p>
                            </div>
                            <div class="dev dev-six">
                                <h3>Elaiza Rosario</h3>
                                <p>&nbsp;&nbsp;&nbsp;Frontend Web Developer</p>
                            </div>
                            <div class="dev dev-seven">
                                <h3>Erin Alonzo</h3>
                                <p>&nbsp;&nbsp;&nbsp;Frontend Web Developer</p>
                            </div>
                            <div class="dev dev-eight">
                                <h3>Eloisa Rosario</h3>
                                <p>&nbsp;&nbsp;&nbsp; Assistant Editor</p>
                            </div>
                        </div>
                        <div class="mentions">
                            <div class="ment-one">
                                <h3>Mr. Julius Abe Peralta</h3>
                                <p>&nbsp;&nbsp;&nbsp;IT Professional</p>
                            </div>
                            <div class="ment-two">
                                <h3>Mr. Jundy Dimasu-ay</h3>
                                <p>&nbsp;&nbsp;&nbsp;IT Professional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        &copy; 2024 All Rights Reserved <br> Balingasa High School 12-ICT OCTAV8
    </footer>
    <script>
        document.getElementById("goAbout").addEventListener("click", function() {
    window.location.href = "#about";
  });
    </script>
</body>
</html>
