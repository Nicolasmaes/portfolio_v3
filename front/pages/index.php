<?php
include "../../includes/header.php";
session_start();
?>
<?php 
if (isset($_SESSION['username'])&&!empty($_SESSION['username'])) {?>
<a href="../../back/home.php">b-o</a>
<?php
}else{
echo '';
}
?>

<h1>Nicolas MAËS</h1>
<div id="app"></div>
<div class="gif">
<img class='gif_accueil' src="../../assets/pictures/apropos_image.gif" alt="Nicolas qui tape au clavier">
</div> <!-- ferme gif -->
<div class="slogan" data-aos="fade-up">
<h2>GET YOUR OWN<br> WEBSITE, SOON.</h2>
</div>
<!-- <a href="https://www.instagram.com/coralie.fr17/">
    <h2>@coraliefr17 sur Instagram</h2>
    <div class="carousel">

    </a>
        <div>
            <img src="1.jpg" alt="">
        </div>
        <div>
            <img src="2.jpeg" alt="">
        </div>
        <div>
            <img src="3.jpg" alt="">
        </div>
        <div>
            <img src="4.jpg" alt="">
        </div>
        <div>
            <img src="5.png" alt="">
        </div>
    </div>
    <div class="image_viewer">

    </div> -->
<?php include "../../includes/footer.php"; ?>