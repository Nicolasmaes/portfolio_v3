<?php 

include "../includes/header.php"; 

session_start();

    require_once('../../back/db_connect.php');
    $sql='SELECT * FROM `projects` ORDER BY `project_id` DESC';
    $query=$db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container_projects">
<div class="project_title_next">votre projet, ici ?</div>
<div class="arrow"></div>
<div class="project_thumbnail_next"><img src="../../assets/thumbnails/next_project.png" alt=""></div>
<div class="arrow"></div>
<?php 
foreach ($result as $project) {
    if($project['project_id'] % 2 == 0){
?>
    <div class="project_title_0<?= $project['project_id'] ?>">
        <a href="project_details.php?id=<?= $project['project_id'] ?>">
        <h2><?= $project['project_title'] ?></h2>
        </a>
    </div>
    <div class="project_thumbnail_0<?= $project['project_id'] ?>">
        <img src="../../assets/thumbnails/<?= $project['project_picture'] ?>" alt="">
    </div>
<?php 
    }else{  
?>        
    <div class="project_title_0<?= $project['project_id'] ?>">
    <a href="project_details.php?id=<?= $project['project_id'] ?>">
        <h2><?= $project['project_title'] ?></h2>
    </a>
    </div>
    <div class="project_thumbnail_0<?= $project['project_id'] ?>">
        <img src="../../assets/thumbnails/<?= $project['project_picture'] ?>" alt="">
    </div>
<?php
}
}
?>


<?php include "../includes/footer.php"; ?>