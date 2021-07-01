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

    <form action="project_edit_form_handler.php" method="post" enctype="multipart/form-data"> <!-- pour envoyer plusieurs formats dans ce formulaire -->

        <h1><label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title" value="<?= $result['project_title'] ?>"></h1>

        <div class="containerproject">
            <div class="project_begin">
                <label for="input_begin">Date of beginning</label>
                <input type="date" id="input_begin" name="project_begin" value="<?= $result['project_begin'] ?>">
            </div>
            <div class="project_end">
                <label for="input_end">Date the projects was finished</label>
                <input type="date" id="input_end" name="project_end" value="<?= $result['project_end'] ?>">
            </div>
            <div class="project_technologies">
                <label for="input_techs">Technologies</label>
                <textarea id="input_techs" cols="30" rows="10" name="project_technologies"><?= $result['project_technologies'] ?></textarea>
            </div>
            <div class="dossier_de_conception">
                <label for="input_design_brief">Design brief</label>
                <input type='file' id="input_design_brief" name="project_design_file" value="<?= $result['project_id'] ?>">
            </div>
            <div class="project_link_website">
                <label for="input_link_website">Website</label>
                <input type="url" id="input_link_website" name="project_link_website" value="<?= $result['project_link_website'] ?>">
            </div>
            <div class="project_link_github">
                <label for="input_link_github">GitHub link</label>
                <input type="url" id="input_github" name="project_link_github" value="<?= $result['project_link_github'] ?>">
            </div>
            <div class="project_coworkers">
                <label for="input_coworkers">Coworkers</label>
                <textarea id="input_coworkers" cols="30" rows="10" name="project_coworkers"><?= $result['project_coworkers'] ?></textarea>
            </div>
            <div class="sources">
                <label for="input_sources">Sources</label>
                <input type='file' id="input_sources" name="project_sources" value="<?= $result['project_sources'] ?>">
            </div>
            <div class="screenshots_gallery">
                <label for="input_picture">Picture</label>
                <input type="file" id="input_picture" name="project_picture" value="<?= $result['project_picture'] ?>">
            </div>
            <div class="project_context">
                <label for="input_context">Context</label>
                <textarea id="input_context" cols="30" rows="10" name="project_context"><?= $result['project_context'] ?></textarea>
            </div>
            <div class="project_specs">
                <label for="input_specs">Specs</label>
                <textarea id="input_context" cols="20" rows="5" name="project_specs"><?= $result['project_specs'] ?></textarea>
                <div class="prototype">
                    <label for="input_proto">Prototype</label>
                    <input type='file' id="input_proto" name="project_proto" value="<?= $result['project_prototype'] ?>">
                </div>
            </div>
            <div class="button">
                <button type="reset">Reinitialize</button><br>
                <input type="submit" id="submit" value="Send"></input>
                <!-- <input type="submit"> autre manière de créer un bouton -->
            </div>
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
