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
    } else {
        echo 'missing id';
    }
} else {
    echo 'Please log in.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project details</title>
</head>
<body>
    <?= $result['project_title'] ?>
    <img src="../assets/thumbnails/<?= $result['project_picture']; ?>">
    <?= $result['project_context'] ?>
    <?= $result['project_specs'] ?>
    
    <a href="home.php"><button>Back</button></a>
    <a href="project-delete.php?id=<?= $result['project_id'] ?>"><button>Delete <?= $result['project_title'] ?></button></a>
    <a href="project-edit.php?id=<?= $result['project_id'] ?>"><button>Edit <?= $result['project_title'] ?></button></a>
    
</body>
</html>