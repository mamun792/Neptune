<?php
session_start();
require_once('../../db_controler.php');
if(isset($_POST['p_btn'])){
    $name=$_POST['portflio_name'];
    $p_category=$_POST['portflio_catogery'];
    $p_descprition=$_POST['portflio_details'];
    $photo=$_FILES['portflio_img']['name'];
    $tem=$_FILES['portflio_img']['tmp_name'];
    $error=$_FILES['portflio_img']['error'];
    $size=$_FILES['portflio_img']['size'];

    $extenion=explode(".",$photo);
   $end=end($extenion);
 
   
    
   
    $status=false;
    if(empty($name)){
        $_SESSION['name']= "Name is required";
        $status=true;
       
    }
    if(empty($p_category)){
        $_SESSION['cat']= "category is required";
        $status=true;
        
    }
    if(empty($p_descprition)){
        $_SESSION['descp']= "descprition is required";
        $status=true;
        
    }
    
    if($status){
        header('location: portflio.php');
    }

    if($end=='png' || $end=='jpg' || $end=='jpeg'){
          
        if($size<20000000){
            if($error==0){
                $destnation="imges/portflio/".$photo;
                $imgname=move_uploaded_file($tem,$destnation);

                $insert="INSERT INTO portflio(p_name,p_category	,p_descprition,	photo)
                VALUES('$name','$p_category','$p_descprition','$photo')";
                $query=mysqli_query($con,$insert);
                if($query){
                    $_SESSION['msg']="succeefully added";
                    header('location: portflio.php'); 
                }
    
            }else{
                $_SESSION['siz']="error photo";
                header('location: portflio.php'); 
            }
           
        }else{
            $_SESSION['siz']="Size must be 2MB";
             header('location: portflio.php');
        }

      
       }else{

        $_SESSION['siz']="please submit jpg,png and jpeg";
         header('location: portflio.php');
       }
}
?>