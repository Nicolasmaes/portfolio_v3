<?php
session_start();

if ($_SESSION['username']) {
    if ($_POST) {
        if (
            isset($_POST['project_id']) && !empty($_POST['project_id']) &&
            isset($_POST['project_picture']) && !empty($_POST['project_picture'])
            /* isset($_POST['project_design_file']) && !empty($_POST['project_design_file']) */
        ) {

            $id = strip_tags($_POST['project_id']);
            $picture = $_FILES['project_picture'];
            /* print_r($picture); */

            $target_dir = "../assets/thumbnails/";
$target_file = $target_dir . basename($_FILES["project_picture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["project_picture"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  /* echo "Sorry, file already exists."; */
  echo "Files exists, but upload ok.";
  $uploadOk = 1;
}

// Check file size
if ($_FILES["project_picture"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "svg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, SVG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["project_picture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename($_FILES["project_picture"]["name"]))."has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

            require_once("db_connect.php");
            $sql = 'UPDATE `projects` SET  `project_picture`=:project_picture WHERE `project_id`=:project_id';
            
            $query = $db->prepare($sql);
            $query->bindValue(':project_id', $id, PDO::PARAM_INT);
            $query->bindValue(':project_picture', $picture ['name'], PDO::PARAM_STR);
            $query->execute();

            echo 'Everything is ok.';
            echo ' <br><a href="home.php">Back</a>';
        } else {
            echo 'Please fill every form';
        }
    } else {
        echo 'To access this page, you have to upload a project';
    }
}else{
    echo 'Please log in.'; 
}