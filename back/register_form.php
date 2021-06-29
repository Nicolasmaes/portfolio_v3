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
    <a href="../front/index.php">
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
        <form action="register-form-handler.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
            <fieldset>
                <legend>Formulaire</legend>
                <div>
                    <label for="username">Username</label>
                    <input id="username" name="username"></input>
                </div>
                <div>
                    <label for="user_mail">E-mail</label>
                    <input type="user_mail" id='input_mail' name='user_mail'>
                </div>
                <div>
                    <label for="user_password">Password</label>
                    <input type="password" id='user_password' name='user_password'>
                </div>
                <div>
                    <label for="user_confirmation">Confirmation</label>
                    <input type="password" id='user_confirmation' name='user_confirmation'>
                </div>
                <div class="button">
                    <button type="reset">Reinitialize</button><br>
                    <input type="submit" id="submit" value="Send"></input>
                    <!-- <input type="submit"> autre manière de créer un bouton -->
                </div>
            </fieldset>
        </form>
        <footer>
        <a href="../pages/contact.php">contact</a>
        <a href="index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <a href="../../back/login_form.php">connexion</a>
    </footer>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="../script/hamburger_menu.js"></script>
    <script src="../script/typewriter_effect.js"></script>
    </body>
</html>