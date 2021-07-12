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
<div>
    <a href="https://www.instagram.com/coralie.fr17/"><h2>@coralie.fr17 sur Instagram</h2></a>
</div>
<div class="coralie_photographs">
    <div class="coralie_photographs_small_card">
        <img src="../../assets/pictures/1.jpg" alt="">
    </div>
    <div class="coralie_photographs_small_card">
        <img src="../../assets/pictures/2.jpg" alt="">
    </div>
    <div class="coralie_photographs_small_card">
        <img src="../../assets/pictures/3.jpg" alt="">
    </div>
    <div class="coralie_photographs_small_card">
        <img src="../../assets/pictures/4.jpg" alt="">
    </div>
    <div class="coralie_photographs_small_card">
        <img src="../../assets/pictures/5.jpg" alt="">
    </div>
</div>


<?php include "../../includes/footer.php"; ?>