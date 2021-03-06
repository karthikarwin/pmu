<?php
session_start();
include_once('db.php');
if ( !isset($_POST['addimage']) ) {
    header('Location: ../login.php');
    exit;
} else {
    $admin_name = $_SESSION['user'];
    $title = $_POST['title'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s',microtime(true));
    $target_dir = "../img/gallery/";
    $target_file = $target_dir . basename($_FILES['img']['name']);
    if( empty($title) || empty($_FILES['img']['name']) ) {
        echo "Fill All the fields";
    }
    else {
        $uploadOk = 1;
        $tempe = explode(".", $_FILES['img']['name']);
        $newfilename = round(microtime(true)) . '.' . end($tempe);
        $fwd1 = "img/gallery/".$newfilename;
        $fwd2 = "../img/gallery/".$newfilename;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["addimage"])) 
        {
            $check = getimagesize($_FILES['img']['tmp_name']);
            if($check !== false) 
            {    
                $uploadOk = 1;
            } 
            else 
            {
                echo "File is not an image.";
                exit;
            }
        
        
            // Check file size
            if ($_FILES['img']["size"] > 1000000) {
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
            }
            else 
            {
                if (move_uploaded_file($_FILES['img']['tmp_name'], $fwd2)) 
                {
                    $fwd1 = "img/gallery/".$newfilename;
                } 
                else 
                {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            
            /* mysql_query("ALTER TABLE `blog_post` DROP `id`;");
            mysql_query("ALTER TABLE `blog_post` AUTO_INCREMENT = 1;");
            mysql_query("ALTER TABLE `blog_post` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;"); */
            $sql = mysqli_query($conn, "INSERT INTO gallery VALUES('', '$title', '$fwd1', '$date')");
            if($sql)
            {
                header("Location: ../gallery.php");
                exit;
            }
            else
            {
                die(mysqli_error($conn));
            }
        }
    }
}
