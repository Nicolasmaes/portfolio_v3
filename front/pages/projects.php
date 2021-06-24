<?php 

include "../includes/header.php"; 

session_start();

    require_once('../../back/db_connect.php');
    $sql='SELECT * FROM `projects` ORDER BY `project_id` DESC';
    $query=$db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="thumbnail_first">
<div class="project_title_0<?= $project['project_id'] ?>">
        <a href="contact.php">
        <h2>Votre projet, bientôt ici ?</h2>
        </a>
    </div>
    <div>
        <a href="contact.php"><img class='image' src="../../assets/thumbnails/next_project.png" alt=""></a>
    </div>

</div>

<?php 
foreach ($result as $project) {
    if($project['project_id'] % 2 == 0){
?>
<div class="thumbnail_second">
    <div class="project_thumbnail_0<?= $project['project_id'] ?>">
    <a href="project_details.php?id=<?= $project['project_id'] ?>"><img class='image' src="../../assets/thumbnails/<?= $project['project_picture'] ?>" alt=""></a>
    </div>
    <div class="project_title_0<?= $project['project_id'] ?>">
        <a href="project_details.php?id=<?= $project['project_id'] ?>">
        <h2><?= $project['project_title'] ?></h2>
        </a>
        <div class="paragraph"><p><?= $project['project_context'] ?></p></div>
    </div>
</div>
<?php
    }else{
?>
<div class="thumbnail_first">
    <div class="project_title_0<?= $project['project_id'] ?>">
        <a href="project_details.php?id=<?= $project['project_id'] ?>">
        <h2><?= $project['project_title'] ?></h2>
        </a>
        <div class="paragraph"><p><?= $project['project_context'] ?></p></div>
    </div>
    <div class="project_thumbnail_0<?= $project['project_id'] ?>">
    <a href="project_details.php?id=<?= $project['project_id'] ?>"><img class='image' src="../../assets/thumbnails/<?= $project['project_picture'] ?>" alt=""></a>
    </div>
</div>
<?php
}
}
?>
<?php include "../includes/footer.php"; ?>