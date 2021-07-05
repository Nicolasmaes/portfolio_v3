<?php
    session_start();
    if ($_SESSION['username']) {
    require_once('db_connect.php');
    }
?><?php
include "../includes_back/header.php";
?>

    <form action="add_form_handler.php" method="post" enctype="multipart/form-data"> <!-- pour envoyer plusieurs formats dans ce formulaire -->

        <h1><label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title"></h1>

        <div class="containerproject">
            <div class="project_begin">
                <label for="input_begin">Date of beginning</label>
                <input type="date" id="input_begin" name="project_begin" min="2020-07-01" max="2030-12-31">
            </div>
            <div class="project_end">
                <label for="input_end">Date the projects was finished</label>
                <input type="date" id="input_end" name="project_end" min="2020-07-01" max="2030-12-31">
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
            <div class="screenshots_gallery">
                <label for="input_picture">Picture</label>
                <input type="file" id="input_picture" name="project_picture">
            </div>
            <div class="favicon">
                <label for="input_favicon">Favicon</label>
                <input type="file" id="input_favicon" name="project_favicon">
            </div>
            <div class="project_context">
                <label for="input_context">Context</label>
                <textarea id="input_context" cols="30" rows="10" name="project_context"></textarea>
            </div>
            <div class="project_specs">
                <label for="input_specs">Specs</label>
                <textarea id="input_context" cols="20" rows="5" name="project_specs"></textarea>
            </div>
            <div class="button">
                <button type="reset">Reset</button><br>
                <input type="submit" id="submit" value="Send"></input>
                <!-- <input type="submit"> autre manière de créer un bouton -->
            </div>
        </div>
    </form>
    <?php
include "../includes_back/footer.php";
?>
