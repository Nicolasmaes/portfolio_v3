<?php 
include "../../includes/header.php";
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

<h1><?= $result['project_title'] ?></h1>

<div class="container_single_project">
    <div data-aos="fade-up" class="project_link_website">
        <a target="_blank" href="<?= $result['project_link_website'] ?>">
            <h2>lien vers le projet en ligne &#8594</h2>
        </a>
    </div>
    <div data-aos="fade-up" class="screenshots_gallery">
        <img class='image' src="../../assets/thumbnails/<?= $result['project_picture'] ?>" alt="">
    </div>
    <h2 data-aos="fade-up">début du projet</h2>

    <div data-aos="fade-up" class="project_begin">
        <?= $result['project_begin'] ?>
    </div>

    <h2 data-aos="fade-up">mise en ligne</h2>

    <div data-aos="fade-up" class="project_end">
        <?= $result['project_end'] ?>
    </div>

    <h2 data-aos="fade-up">contexte</h2>

    <div data-aos="fade-up" class="project_context">
        <?= $result['project_context'] ?>
    </div>

    <h2 data-aos="fade-up">spécifications</h2>

    <div data-aos="fade-up" class="project_specs">
        <?= $result['project_specs'] ?>
    </div>

    <h2 data-aos="fade-up">collègues de travail</h2>

    <div data-aos="fade-up" class="project_coworkers">
        <?= $result['project_coworkers'] ?>
    </div>

    <h2 data-aos="fade-up">stack</h2>

    <div data-aos="fade-up" class="project_technologies">
        <?= $result['project_technologies'] ?>
    </div>

<!--     <div class="single_project_links" > -->
        <div class="project_link_github" data-aos="fade-up">
            <a target="_blank" href="<?= $result['project_link_github'] ?>">
                <h2>dépôt du projet sur GitHub &#8594</h2>
            </a>
        </div>
<?php
if (!empty($result['project_design_file']))
{
?>
<div class="design_file">
    <a href="design_file.php?id=<?= $result['project_id'] ?>">
        <h2>dossier de conception &#8594</h2>
    </a> 
</div>
<?php
}else{
echo '';
}
?>
<!--     </div> ferme single_project_links -->
    
</div> <!-- ferme container_single_project -->
<?php include "../../includes/footer.php"; ?>