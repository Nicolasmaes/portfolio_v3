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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/style/style.css">
<title>home.php</title>
</head>
<body>
<header>
        <a href="index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <menu>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="../front/pages/projects.php">projets</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="../front/pages/cv.php">cv</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="../front/pages/about.php">à propos de moi</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
            <div>
                <img src="../assets/icons/opentag.svg" alt="" class='balise1'>
                <a href="../front/pages/contact.php">contact</a>
                <img src="../assets/icons/closingtag.svg" alt="" class='balise2'>
            </div>
        </menu>
        <div class="menumobile">
            <div id="hamb_menu_btn">
                <div class="barre" id='barre1'></div>
                <div class="barre" id='barre2'></div>
                <div class="barre" id='barre3'></div>
            </div>
            <div id="menumobile">
                <a href="projects.php">projets</a>
                <a href="cv.php">cv</a>
                <a href="about.php">à propos de moi</a>
                <a href="contact.php">contact</a>
            </div>
        </div>
    </header>
<h1>Back-office</h1>
<div class="main_container">
    <div class="options">
        <a href="add-form.php"><button><img src="../assets/icons/add.png" alt="logo edit"></button></a>
        <a href="project-edit.php"><button><img src="../assets/icons/edit.png" alt="logo edit"></button></a>
        <a href="project-delete.php"><button><img src="../assets/icons/delete.png" alt="logo edit"></button></a>
        <a href="project-hide.php"><button><img src="../assets/icons/hide.png" alt="logo edit"></button></a>
    </div><!-- ferme options -->
    <table>
        <tr><th></th><th>favicon</th><th>nom du projet</th><th>vues</th><th>date d'ajout</th></tr>
<?php 
foreach ($result as $project) {
?>
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><img src="../assets/favicons/<?= $project['project_favicon'] ?>" alt=""></td>
            <td><a href="../front/pages/project_details.php?id=<?= $project['project_id'] ?>">
        <p><?= $project['project_title'] ?></p></a></td>
        <td></td>
        <td><p><?= $project['project_end'] ?></p></td>

<?php
}
?>
    </table>
</div><!-- ferme main_container -->

<footer>
        <a href="index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <a href="login-form.php"><button>connexion</button></a>
    </footer>
    <script src="../front/script/main.js"></script>
</body>
</html>