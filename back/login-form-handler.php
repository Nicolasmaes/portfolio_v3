<?php
require_once('db_connect.php');
//cherche dans la base de données un username qui correspond à ce que l'utilisateur à renseigné dans le formulaire
$sql = 'SELECT id,username,password FROM users WHERE username=:username';
$query = $db->prepare($sql);
$query->execute (array('username'=>$_POST['username']));
$result = $query->fetch();

if(!$result){
    echo 'Username or password is incorrect.';
}else{
    $verif = password_verify($_POST['userpassword'],$result['password']);
    if(!$verif){
        echo 'Username or password is incorrect.';
    }else{
        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['success'] = 'ACCESS GRANTED';
        header ('Location:home.php');
    }
}