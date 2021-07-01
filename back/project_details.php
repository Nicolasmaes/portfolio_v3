<?php 
session_start();
if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db_connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo 'missing id';
    }
} else {
    echo 'Please log in.';
}
?><!DOCTYPE html>
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
<h1><?= $result['project_title'] ?></h1>

<div class="containerproject">
    <div class="project_begin"><?= $result['project_begin'] ?></div>
    <div class="project_end"><?= $result['project_end'] ?></div>
    <div class="project_technologies"><?= $result['project_technologies'] ?></div>
    <div class="dossier_de_conception"><a href="design_file.php?id=<?= $result['project_id'] ?>">
        <p>Dossier de conception</p>
        </a></div>
    <div class="project_link_website"><a target="_blank" href="<?= $result['project_link_website'] ?>"><?= $result['project_link_website'] ?></a></div>
    <div class="project_link_github"><a target="_blank" href="<?= $result['project_link_github'] ?>"><?= $result['project_link_github'] ?></a></div>
    <div class="project_coworkers"><?= $result['project_coworkers'] ?></div>
    <div class="sources"><a href="../front/pages/pdf.php?id=<?= $result['project_id'] ?>">
        <p>Sources</p>
        </a></div>
    <div class="screenshots_gallery"><img src="../assets/thumbnails/<?= $result['project_picture'] ?>"></div>
    <div class="project_context"><?= $result['project_context'] ?></div>
    <div class="project_specs">
        <p><?= $result['project_specs'] ?></p>
        <div class="prototype" id='prototype'><?= $result['project_prototype'] ?></div>
    </div><!-- ferme project_specs -->
    <a href="home.php"><button>Back</button></a>
<a href="project_delete.php?id=<?= $result['project_id'] ?>"><button>Delete <?= $result['project_title'] ?></button></a>
<a href="project_edit.php?id=<?= $result['project_id'] ?>"><button>Edit <?= $result['project_title'] ?></button></a>
</div> <!-- ferme containerproject -->

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