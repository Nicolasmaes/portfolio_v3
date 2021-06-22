<?php
    session_start();
    if ($_SESSION['user_name']) {
    require_once('db_connect.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/style/style.css">
<title>Add form</title>
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

    <form action="add-form-handler.php" method="post" enctype="multipart/form-data"> <!-- pour envoyer plusieurs formats dans ce formulaire -->
        <div class='centering'>
            <label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title">
        </div>

        <div class="containerproject">
            <div class="project_begin">
                <label for="input_begin">Date of beginning</label>
                <input type="date" id="input_begin" name="project_begin">
            </div>
            <div class="project_end">
                <label for="input_end">Date the projects was finished</label>
                <input type="date" id="input_end" name="project_end">
            </div>
            <div class="project_technologies">
                <label for="input_techs">Technologies</label>
                <textarea id="input_techs" cols="30" rows="10" name="project_technologies"></textarea>
            </div>
            <div class="dossier_de_conception">
                <label for="input_design_brief">Design brief</label>
                <input type='file' id="input_design_brief" name="project_design_file">
            </div>
            <div class="project_link_website">
                <label for="input_link_website">Website</label>
                <input type="url" id="input_link_website" name="project_link_website">
            </div>
            <div class="project_link_github">
                <label for="input_link_github">GitHub link</label>
                <input type="url" id="input_github" name="project_link_github">
            </div>
            <div class="project_coworkers">
                <label for="input_coworkers">Coworkers</label>
                <textarea id="input_coworkers" cols="30" rows="10" name="project_coworkers"></textarea>
            </div>
            <div class="sources">
                <label for="input_sources">Sources</label>
                <input type='file' id="input_sources" name="project_sources">
            </div>
            <div class="screenshots_gallery">
                <label for="input_picture">Picture</label>
                <input type="file" id="input_picture" name="project_picture">
            </div>
            <div class="project_context">
                <label for="input_context">Context</label>
                <textarea id="input_context" cols="30" rows="10" name="project_context"></textarea>
            </div>
            <div class="project_specs">
                <label for="input_specs">Specs</label>
                <textarea id="input_context" cols="20" rows="5" name="project_specs"></textarea>
                <div class="prototype">
                    <label for="input_proto">Prototype</label>
                    <input type='file' id="input_proto" name="project_proto">
                </div>
            </div>
            <div class="button">
                <button type="reset">Reset</button><br>
                <input type="submit" id="submit" value="Send"></input>
                <!-- <input type="submit"> autre manière de créer un bouton -->
            </div>
        </div>
    </form>
    <footer>
        <a href="index.php"><img src="../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <a href="login-form.php"><button>connexion</button></a>
    </footer>
    <script src="../front/script/main.js"></script>
</body>
</html>
