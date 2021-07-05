<?php 
session_start();
if ($_SESSION['username']) {
 /*        require_once('db_connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(); */

        require_once('db_connect.php');
        $sql='SELECT * FROM `projects`';
        $query=$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo 'Please log in.';
}
?>
<?php
include "../includes_back/header.php";
?>
<h1>Back-office</h1>
<div class="option_container">
    <div class="options">
        <a href="add_form.php"><button><img src="../assets/icons/add.png" alt="logo edit"></button></a>
        <a href="project_edit.php"><button><img src="../assets/icons/edit.png" alt="logo edit"></button></a>
        <a href="project_delete.php"><button><img src="../assets/icons/delete.png" alt="logo edit"></button></a>
        <a href="#"><button><img src="../assets/icons/hide.png" alt="logo edit"></button></a>
    </div><!-- ferme options -->
    <table>
        <tr><th></th><th>favicon</th><th>nom du projet</th><th>vues</th><th>date d'ajout</th></tr>
<?php 
foreach ($result as $project) {
?>
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><img src="../assets/favicons/<?= $project['project_favicon'] ?>" alt=""></td>
            <td><a href="../back/project_details.php?id=<?= $project['project_id'] ?>">
        <p><?= $project['project_title'] ?></p></a></td>
        <td></td>
        <td><p><?= $project['project_end'] ?></p></td>

<?php
}
?>
    </table>
</div><!-- ferme main_container -->

<?php
include "../includes_back/footer.php";
?>