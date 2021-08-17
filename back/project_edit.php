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
?>
<?php
include "../includes_back/header.php";
?>
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
            <div class="project_context">
                <label for="input_context">Context</label>
                <textarea id="input_context" cols="30" rows="10" name="project_context"><?= $result['project_context'] ?></textarea>
            </div>
            <div class="project_specs">
                <label for="input_specs">Specs</label>
                <textarea id="input_context" cols="20" rows="5" name="project_specs"><?= $result['project_specs'] ?></textarea>
            </div>
            <input type="hidden" name="project_id" value="<?= $result['project_id'] ?>">
            <div class="button">
                <button type="reset">Reinitialize</button><br>
                <input type="submit" id="submit" value="Send"></input>
                <!-- <input type="submit"> autre manière de créer un bouton -->
            </div>
        </div>
    </form>
<br>
<br>
<br>
    <form action="project_pictures_edit_form_handler.php" method="post" enctype="multipart/form-data"> <!-- pour envoyer plusieurs formats dans ce formulaire -->
<!--     <div class="dossier_de_conception">
        <label for="input_design_brief">Design brief</label>
        <input type='file' id="input_design_brief" name="project_design_file" value="<?= $result['project_id'] ?>">
    </div> -->
    <div class="screenshots_gallery">
        <label for="input_picture">Picture</label>
        <input type="file" id="input_picture" name="project_picture" value="<?= $result['project_picture'] ?>">
    </div>
    </div>
<!--             <div class="favicon">
                <label for="input_favicon">Favicon</label>
                <input type="file" id="input_favicon" name="project_favicon"  value="<?= $result['project_facivon'] ?>">
            </div> -->
    <div class="button">
        <button type="reset">Reinitialize</button><br>
        <input type="submit" id="submit" value="Send"></input>
        <!-- <input type="submit"> autre manière de créer un bouton -->
    </div>
</div>
</form>

<?php
include "../includes_back/footer.php";
?>
