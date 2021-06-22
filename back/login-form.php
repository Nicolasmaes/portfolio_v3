<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/style/style.css">
    <title>Log in</title>
</head>
<body>
<header>
        <a href="../front/index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <menu>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="projects.php">projets</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="cv.php">cv</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="about.php">à propos de moi</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="contact.php">contact</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
        </menu>
        <div id="hamb_menu_btn">
            <div class="barre" id='barre1'></div>
            <div class="barre" id='barre2'></div>
            <div class="barre" id='barre3'></div>
        </div>
        <div id="menumobile">
            <a href="../front/pages/projects.php">projets</a>
            <a href="../front/pages/cv.php">CV</a>
            <a href="../front/pages/about.php">à propos de moi</a>
            <a href="../front/pages/contact.php">contact</a>
        </div>
    </header>
        <form action="login-form-handler.php" method="post" class='login_form'>
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
        <a href="../front/index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <a href="login-form.php"><button>connexion</button></a>
    </footer>
    <script src="../front/script/main.js"></script>
</body>
</html>