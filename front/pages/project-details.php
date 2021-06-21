<?php 

include "../includes/header.php";

session_start();

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../../back/db_connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo 'missing id';
    }

?>


<h1>nicolasmaes.fr</h1>

<div class="containerproject">
    <div class="project_begin"><input type="date" name="" id=""></div>
    <div class="project_end"><input type="date" name="" id=""></div>
    <div class="project_technologies">project_technologies</div>
    <div class="dossier_de_conception">dossier_de_conception</div>
    <div class="project_link_website">project_link_website</div>
    <div class="project_link_github">project_link_github</div>
    <div class="project_coworkers">project_coworkers</div>
    <div class="sources">sources</div>
    <div class="screenshots_gallery">screenshots_gallery</div>
    <div class="project_context">project_context</div>
    <div class="project_specs">
        project_specs
        <div class="prototype">prototype</div>
    </div>


<?php include "../includes/footer.php"; ?>