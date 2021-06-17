<?php 

include "../includes/header.php"; 

session_start();

    require_once('../../back/db_connect.php');
    $sql='SELECT * FROM `projects`';
    $query=$db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container_projects">
<?php 
        foreach ($result as $project) {
        ?>
<!-- <a href="project-details.php?id=<?=$project['project_id']?>"><?=$project['project_title']?> -->
 <div class="project_thumbnail_next"><img src="../assets/thumbnails/next_project.png" alt=""></div>
  <div class="arrow"></div>
  <div class="project_title_08">articles publiés</div>
  <div class="project_title_07">Nowher</div>
  <div class="project_title_06">a11é</div>
  <div class="project_title_05">dddd</a></div>
  <div class="project_title_04">JavaScript challenge</div>
  <div class="project_title_03">Pizzeria landing page</div>
  <div class="project_title_02">Zozor</div>
  <div class="project_title_01">nicolasmaes.fr</div>
  <div class="project_title_next">votre projet, ici ?</div>
  <div class="project_thumbnail_08"><img src="../assets/thumbnails/articles.png" alt=""></div>
  <div class="project_thumbnail_07"><img src="../assets/thumbnails/nowher.png" alt=""></div>
  <div class="project_thumbnail_06"><img src="../assets/thumbnails/a11e.png" alt=""></div>
  <div class="project_thumbnail_05"><img src="../assets/thumbnails/unseen.png" alt=""></div>
  <div class="project_thumbnail_04"><img src="../assets/thumbnails/js.png" alt=""></div>
  <div class="project_thumbnail_03"><img src="../assets/thumbnails/pizzeria.png" alt=""></div>
  <div class="project_thumbnail_02"><img src="../assets/thumbnails/zozor.png" alt=""></div>
  <div class="project_thumbnail_01"><img src="../assets/thumbnails/wavy.GIF" alt=""></div>
  <?php
        }
        ?>
</div>

<?php include "../includes/footer.php"; ?>