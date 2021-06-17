<?php
require_once('db_connect.php'); // la liaison à la base de données se fait après les vérifications
if (isset($_POST['user_name'])&&!empty($_POST['user_name'])&&isset($_POST['user_mail'])&&!empty($_POST['user_mail'])&&isset($_POST['user_password'])&&!empty($_POST['user_password'])&&isset($_POST['user_confirmation'])&&!empty($_POST['user_confirmation'])) {
      
      if ($_POST['user_password'] === $_POST['user_confirmation']) {
            $username = strip_tags($_POST['user_name']);
            $email = strip_tags($_POST['user_mail']);
            $password = strip_tags($_POST['user_password']);
            $confirmation = strip_tags($_POST['user_confirmation']);
            $password_encrypt = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
            // faire requête sql
            $sql = "INSERT INTO users(username,email,password) VALUES(:username, :email, :password)";
            $query = $db->prepare($sql);
            $query->bindValue(':username', $username, PDO::PARAM_STR); // en orange les noms des colonnes (champs) dans la base de données
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':password', $password_encrypt, PDO::PARAM_STR);
            $query->execute();
            echo '<br><a href="index.php">Retour</a><br>';
            echo 'Success';
      }else{
            echo 'Passwords don\'t match';
      }
}
else{
      echo 'Please fill in every input';
}