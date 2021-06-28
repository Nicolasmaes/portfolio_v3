<?php
session_start();
if($_SESSION['username']){
    if($_POST){
        if (
        isset($_POST['project_title']) && !empty($_POST['project_title']) &&
        isset($_POST['project_begin']) && !empty($_POST['project_begin']) &&
        isset($_POST['project_end']) && !empty($_POST['project_end']) &&
        isset($_POST['project_context']) && !empty($_POST['project_context']) &&
        isset($_POST['project_specs']) && !empty($_POST['project_specs']) &&
        isset($_POST['project_link_website']) && !empty($_POST['project_link_website']) &&
        isset($_POST['project_link_github']) && !empty($_POST['project_link_github']) &&
        isset($_POST['project_technologies']) && !empty($_POST['project_technologies']) &&
        isset($_FILES['project_picture']) && !empty($_FILES['project_picture'])
        ){

        require_once("db_connect.php");
        $title = strip_tags($_POST['project_title']);
        $begin = strip_tags($_POST['project_begin']);
        $end = strip_tags($_POST['project_end']);
        $context = strip_tags($_POST['project_context']);
        $specs = strip_tags($_POST['project_specs']);
        $website_link = strip_tags($_POST['project_link_website']);
        $github_link = strip_tags($_POST['project_link_github']);
        $coworkers = strip_tags($_POST['project_coworkers']);
        $technologies = strip_tags($_POST['project_technologies']);
/*         $proto = strip_tags($_POST['project_proto']);
        $design_file = strip_tags($_POST['project_design_file']);
        $sources = strip_tags($_POST['project_sources']); */

        if ($_FILES['project_picture']['error']) {     
            switch ($_FILES['project_picture']['error']){     
                    case 1: // UPLOAD_ERR_INI_SIZE     
                    echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                    break;     
                    case 2: // UPLOAD_ERR_FORM_SIZE     
                    echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                    break;     
                    case 3: // UPLOAD_ERR_PARTIAL     
                    echo "L'envoi du fichier a été interrompu pendant le transfert !";     
                    break;     
                    case 4: // UPLOAD_ERR_NO_FILE     
                    echo "Le fichier que vous avez envoyé a une taille nulle !"; 
                    break;     
            }     
        }  else {     
    
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
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
    
            // Check file size
            if ($_FILES["project_picture"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
    
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["project_picture"]["tmp_name"], $target_file)) {
                    echo "Le fichier ". htmlspecialchars( basename( $_FILES["project_picture"]["name"])). " a été uploadé.";
                    $picture = basename( $_FILES["project_picture"]["name"]) ;
    
                    $sql = "INSERT INTO projects(project_picture, project_title, project_begin
                    , project_end, project_technologies,project_coworkers, project_context, project_specs, project_link_github, project_link_website) VALUES (:project_picture, :project_title,:project_begin,:project_end,:project_technologies,:project_context,:project_specs,:project_coworkers,:project_link_github,:project_link_website)";
                    $query = $db->prepare($sql);
                    $query->bindValue(':project_title', $title, PDO::PARAM_STR);
                    $query->bindValue(':project_picture', $picture, PDO::PARAM_STR);
                    $query->bindValue(':project_begin', $begin, PDO::PARAM_STR);
                    $query->bindValue(':project_end', $end, PDO::PARAM_STR);
                    $query->bindValue(':project_coworkers', $coworkers, PDO::PARAM_STR);
                    $query->bindValue(':project_technologies', $technologies, PDO::PARAM_STR);
                    $query->bindValue(':project_context', $context, PDO::PARAM_STR);
                    $query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
                    $query->bindValue(':project_link_github', $github_link, PDO::PARAM_STR);
                    $query->bindValue(':project_link_website', $website_link, PDO::PARAM_STR);
                    $query->execute();
            echo 'Everything is ok. Data have been uploaded to the database.';
            echo ' <br><a href="home.php">Back</a>';
        } else {
            echo 'Remplissez tous les champs';
            echo '<br><a href=add-form.php> Retour </a>';
        } 
    }
}
} else {
echo 'Il manque une information !';
}
} else {
echo 'Pour accéder à cette page, vous devez publier un projet';
}
} else {
echo 'Vous n\'êtes pas identifié';
}

?>