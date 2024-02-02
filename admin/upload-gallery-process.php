<?php
session_start();
include('inc/function.php');
if (!isset($_SESSION['sid'])) {
    redirect('index.php');
}

if ($_SESSION['sid']) {
    
    if($_GET['type'] == 'img'){
        $message = $_POST['message'];
        $date = date("Y-m-d h:i:s");
        if(!empty($_POST['message'])){
            $path = "uploads/images/";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
                // echo "directory created";
            }
            $filename = time().".png";
            $target_file = $path . $filename;
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO `imaksoft_gallery_image` (`message`,`image`,`status`,`created_at`) VALUES ('" . $message . "','" . $filename . "',0,'" . $date . "')";
                $res = query($conn, $sql);
            
                redirect('upload-gallery.php?im=1');
            } else {
                redirect('upload-gallery.php?ie=1');
            }
            redirect('upload-gallery.php?im=1');
        } else {
        redirect('upload-gallery.php?ie=1');
        }
    }
    
    if($_GET['type'] == 'video'){
        $message = $_POST['message'];
        $date = date("Y-m-d h:i:s");
        if(!empty($_POST['message'])){
            if($_POST['type']=='upload'){
                $path = "uploads/videos/";
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                $target_file_type = basename($_FILES["video"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file_type,PATHINFO_EXTENSION));
                $uploadOk = 1;
                $check = mime_content_type($_FILES["video"]["tmp_name"]);
                //print_r($check);
                  
                if(strstr($check, "video/")){
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
                
                // Check file size
                if ($_FILES["video"]["size"] > 20000000) {
                $uploadOk = 0;
                redirect('upload-gallery.php?vs=1');
                }
        
                // Allow certain file formats
                // if($imageFileType != "mp4") {
                // $uploadOk = 0;
                // redirect('upload-gallery.php?vt=1');
                // }
        
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                  $msg = "Sorry, your file was not uploaded.";
                  redirect('upload-gallery.php?vf=1');
                } else{
                    $filename = time().".mp4";
                    $target_file = $path . $filename;
                    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
                        $sql = "INSERT INTO `imaksoft_gallery_video` (`message`,`video`,`type`,`status`,`created_at`) VALUES ('" . $message . "','" . $filename . "','upload',0,'" . $date . "')";
                        $res = query($conn, $sql);
                    
                        redirect('upload-gallery.php?vm=1');
                    } else {
                        redirect('upload-gallery.php?ve=1');
                    }
                    redirect('upload-gallery.php?vm=1');
                }
                
        } else {
            $sql = "INSERT INTO `imaksoft_gallery_video` (`message`,`video`,`type`,`status`,`created_at`) VALUES ('" . $message . "','https://www.youtube.com/embed/" . $_POST['youtube-video'] . "','youtube',0,'" . $date . "')";
            $res = query($conn, $sql);
            redirect('upload-gallery.php?vm=1');
        }
        }
    }
    
     if($_GET['type'] == 'document'){
        $title = $_POST['title'];
        $date = date("Y-m-d h:i:s");
        if(!empty($_POST['title'])){
            $path = "uploads/documents/";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
                // echo "directory created";
            }
            $filename = time().".png";
            $target_file = $path . $filename;
            if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO `imaksoft_legal_document` (`title`,`image`,`status`,`created_at`) VALUES ('" . $title . "','" . $filename . "',0,'" . $date . "')";
                $res = query($conn, $sql);
            
                redirect('upload-document.php?m=1');
            } else {
                redirect('upload-document.php?e=2');
            }
            redirect('upload-document.php?m=1');
        } else {
        redirect('upload-document.php?er=1');
        }
    }
    
}

?>