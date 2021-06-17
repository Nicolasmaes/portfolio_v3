<?php
    session_start();
    if ($_SESSION['user_name']) {
    require_once('db_connect.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a project</title>
</head>
<body>
    <form action="add-form-handler.php" method="post">
        <div>
            <label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title">
        </div>
        <div>
            <label for="input_begin">Date of beginning</label>
            <input type="date" id="input_begin" name="project_begin">
        </div>
        <div>
            <label for="input_end">Date the projects was finished</label>
            <input type="date" id="input_end" name="project_end">
        </div>
        <div>
            <label for="input_context">Context</label>
            <textarea id="input_context" cols="30" rows="10" name="project_context"></textarea>
        </div>
        <div>
            <label for="input_specs">Specifications fonctionnelles</label>
            <textarea id="input_context" cols="30" rows="10" name="project_specs"></textarea>
        </div>
        <div>
            <label for="input_coworkers">Coworkers</label>
            <textarea id="input_coworkers" cols="30" rows="10" name="project_coworkers"></textarea>
        </div>
        <div>
            <label for="input_techs">Technologies</label>
            <textarea id="input_techs" cols="30" rows="10" name="project_technologies"></textarea>
        </div>
        <div>
            <label for="input_proto">Prototype</label>
            <input type='file' id="input_proto" name="project_proto">
        </div>
        <div>
            <label for="input_picture">Picture</label>
            <input type="file" id="input_picture" name="project_picture">
        </div>
        <div>
            <label for="input_design_brief">Design brief</label>
            <input type='file' id="input_design_brief" name="project_design_file">
        </div>
        <div>
            <label for="input_sources">Sources</label>
            <input type='file' id="input_sources" name="project_sources">
        </div>
        <div>
            <label for="input_link_website">Website</label>
            <input type="url" id="input_link_website" name="project_link_website">
        </div>
        <div>
            <label for="input_link_github">GitHub link</label>
            <input type="url" id="input_github" name="project_link_github">
        </div>
        <div class="button">
            <button type="reset">Reinitialize</button><br>
            <input type="submit" id="submit" value="Send"></input>
            <!-- <input type="submit"> autre manière de créer un bouton -->
        </div>
    </form>
</body>
</html>