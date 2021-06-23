<?php 
include "../includes/header.php";
session_start();
if ($_SESSION['username']) {
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
} else {
    echo 'Please log in.';
}
?>

<h1><?= $result['project_title'] ?></h1>

<div class="containerproject">
    <div class="project_begin"><?= $result['project_begin'] ?></div>
    <div class="project_end"><?= $result['project_end'] ?></div>
    <div class="project_technologies"><?= $result['project_technologies'] ?></div>
    <div class="dossier_de_conception"><a href="pdf.php"><?= $result['project_design_file'] ?></a></div>
    <div class="project_link_website"><a target="_blank" href="<?= $result['project_link_website'] ?>"><?= $result['project_link_website'] ?></a></div>
    <div class="project_link_github"><a target="_blank" href="<?= $result['project_link_github'] ?>"><?= $result['project_link_github'] ?></a></div>
    <div class="project_coworkers"><?= $result['project_coworkers'] ?></div>
    <div class="sources"><?= $result['project_sources'] ?></div>
    <div class="screenshots_gallery"><img src="../../assets/thumbnails/<?= $result['project_picture'] ?>"></div>
    <div class="project_context"><?= $result['project_context'] ?></div>
    <div class="project_specs">
        <p><?= $result['project_specs'] ?></p>
        <div class="prototype" id='prototype'><?= $result['project_prototype'] ?></div>
    </div><!-- ferme project_specs -->
</div> <!-- ferme containerproject -->
<?php include "../includes/footer.php"; ?>