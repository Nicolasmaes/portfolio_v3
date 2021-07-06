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
<div class="slogan" data-aos="fade-up">  <!-- slogan -->
<h2>GET YOUR OWN<br> WEBSITE, SOON.</h2>
</div>
<?php include "../../includes/footer.php"; ?>