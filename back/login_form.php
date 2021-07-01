<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Nicolas Maës</title>
</head>
<body>
<header>
<a href="../index.php">
        <img src="../assets/icons/icon_nm.svg" alt="logo du site">
    </a>
    <menu id='menu_desktop'>
        <div>
            <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../front/pages/projects.php">projets</a>
            <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../front/pages/jslibrary.php">ma librairie JavaScript</a>
            <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
        <div>
            <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
            <a href="../front/pages/articles.php">mes articles</a>
            <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
        </div>
    </menu>
    <div id="hamb_menu_btn">
        <div class="barre" id='barre1'></div>
        <div class="barre" id='barre2'></div>
        <div class="barre" id='barre3'></div>
    </div>
</header>
<menu id='menu'>
    <div class='hidden_in_desktop'>
        <a href="../front/pages/projects.php">projets</a>
    </div>
    <div class='hidden_in_desktop'>
        <a href="../front/pages/jslibrary.php">ma librairie JavaScript</a>
    </div>
    <div class='hidden_in_desktop'>
        <a href="../front/pages/articles.php">mes articles</a>
    </div>
    <div class='shown_in_desktop'>
        <img src="../assets/icons/opentag_white.svg" alt="" class='balise1'>
        <a href="../front/pages/cv.php">CV</a>
        <img src="../assets/icons/closingtag_white.svg" alt="" class='balise2'>
    </div>
    <div class='shown_in_desktop'>
        <img src="../assets/icons/opentag_white.svg" alt="" class='balise1'>
        <a href="../front/pages/about.php">à propos de moi</a>
        <img src="../assets/icons/closingtag_white.svg" alt="" class='balise2'>
    </div>
    <div class='shown_in_desktop'>
        <img src="../assets/icons/opentag_white.svg" alt="" class='balise1'>
        <a href="../front/pages/contact.php">contact</a>
        <img src="../assets/icons/closingtag_white.svg" alt="" class='balise2'>
    </div> 
</menu>
        <form action="login_form_handler.php" method="post" class='login_form'>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="userpassword">
            </div>
            <div>
                <input type="submit" value="Log in">
                <a href="index.php"><button>Back</button></a>
            </div>

        </form>

        <footer>
        <a href="../pages/contact.php">contact</a>
        <a href="index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <a href="login_form.php">connexion</a>
    </footer>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="../script/hamburger_menu.js"></script>
    <script src="../script/typewriter_effect.js"></script>
    </body>
</html>