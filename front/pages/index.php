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
<div class="link_insta">
    <a href="https://www.instagram.com/coralie.fr17/" class="link_insta_coralie"><h2>@coralie.fr17  <img src="../../assets/icons/instagram.svg" alt=""></h2></a>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../../assets/pictures/1.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../../assets/pictures/2.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../../assets/pictures/3.png" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../../assets/pictures/4.png" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../../assets/pictures/5.jpg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class='carousel' style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<?php include "../../includes/footer.php"; ?>