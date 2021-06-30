<?php 
session_start();
if ($_SESSION['username']) {
 /*        require_once('db_connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(); */

        require_once('db_connect.php');
        $sql='SELECT * FROM `projects`';
        $query=$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
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
<h1>Back-office</h1>
<div class="option_container">
    <div class="options">
        <a href="add_form.php"><button><img src="../assets/icons/add.png" alt="logo edit"></button></a>
        <a href="project_edit.php"><button><img src="../assets/icons/edit.png" alt="logo edit"></button></a>
        <a href="project_delete.php"><button><img src="../assets/icons/delete.png" alt="logo edit"></button></a>
        <a href="#"><button><img src="../assets/icons/hide.png" alt="logo edit"></button></a>
    </div><!-- ferme options -->
    <table>
        <tr><th></th><th>favicon</th><th>nom du projet</th><th>vues</th><th>date d'ajout</th></tr>
<?php 
foreach ($result as $project) {
?>
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><img src="../assets/favicons/<?= $project['project_favicon'] ?>" alt=""></td>
            <td><a href="../back/project_details.php?id=<?= $project['project_id'] ?>">
        <p><?= $project['project_title'] ?></p></a></td>
        <td></td>
        <td><p><?= $project['project_end'] ?></p></td>

<?php
}
?>
    </table>
</div><!-- ferme main_container -->

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