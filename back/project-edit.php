<?php
session_start();

if ($_SESSION['user_name']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db_connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    }else{
        echo 'wrong url';
    }
}else{
    echo 'Please log in.'; 
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
    <form action="project-edit-form-handler.php" method="post">
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
            <label for="input_specs">Specifications</label>
            <textarea id="input_context" cols="30" rows="10" name="project_specs"></textarea>
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
            <input type="hidden" name ="project_id" value="<?=$result['project_id']?>">
            <input type="submit" id="submit" value="Send"></input>
            <!-- <input type="submit"> autre manière de créer un bouton -->
        </div>
    </form>
    <a href="project-details.php?id=<?=$result['project_id']?>"><button>Back</button></a>
</body>
</html>