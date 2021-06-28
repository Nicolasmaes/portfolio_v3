<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Nicolas Maës</title>
</head>
<body>
<header>
    <a href="index.php">
        <img src="../../assets/icons/icon_nm.svg" alt="logo du site">
    </a>
<!--     <div id="hamb_menu_btn">
        <div class="barre" id='barre1'></div>
        <div class="barre" id='barre2'></div>
        <div class="barre" id='barre3'></div>
    </div> -->
    <menu id='menu_desktop'>
        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/projects.php">projets</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/projects.php">ma librairie JavaScript</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/projects.php">mes articles</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
 <!--        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/cv.php">cv</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/about.php">à propos de moi</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../pages/contact.php">contact</a>
            <img src="../../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>  -->
    </menu>
    <div id="hamb_menu_btn">
        <div class="barre" id='barre1'></div>
        <div class="barre" id='barre2'></div>
        <div class="barre" id='barre3'></div>
    </div>
</header>
<menu id='menu'>
        <div class='hidden_in_desktop'>
            <a href="../pages/projects.php">projets</a>
        </div>
        <div class='hidden_in_desktop'>
            <a href="../pages/projects.php">ma librairie JavaScript</a>
        </div>
        <div class='hidden_in_desktop'>
            <a href="../pages/projects.php">mes articles</a>
        </div>
        <div class='shown_in_desktop'>
        <img  class='shown_in_desktop_tags' src="../../assets/icons/opentag_white.svg" alt="" class='balise1'>
            <a href="../pages/cv.php">CV</a>
            <img  class='shown_in_desktop_tags' src="../../assets/icons/closingtag_white.svg" alt="" class='balise2'>
        </div>
        <div class='shown_in_desktop'>
        <img class='shown_in_desktop_tags' src="../../assets/icons/opentag_white.svg" alt="" class='balise1'>
            <a href="../pages/about.php">à propos de moi</a>
            <img class='shown_in_desktop_tags'  src="../../assets/icons/closingtag_white.svg" alt="" class='balise2'>
        </div>
        <div class='shown_in_desktop'>
        <img class='shown_in_desktop_tags' src="../../assets/icons/opentag_white.svg" alt="" class='balise1'>
            <a href="../pages/contact.php">contact</a>
            <img class='shown_in_desktop_tags' src="../../assets/icons/closingtag_white.svg" alt="" class='balise2'>
        </div> 
    </menu>