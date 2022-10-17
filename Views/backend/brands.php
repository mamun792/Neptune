

<?php
session_start();

require_once('../../db_controler.php');
//die();
if(isset($_POST['btn'])){
   
    $source=$_FILES['img']['name'];
    $size=$_FILES['img']['size'];
    $error=$_FILES['img']['error'];
    $tmp=$_FILES['img']['tmp_name'];
  
   
    //echo getcwd();
   // die();

   $extension=explode(".",$source);
   $extesion_end=end($extension);
  
   if($extesion_end=='png' || $extesion_end=='jpg' || $extesion_end=='jpeg'){
   
    if($size<1000000){

        if($error==0){

        
       
            $img_name=time().rand(11111,22222).".".$extesion_end;
         
            $destinition="imges/bands/".$img_name;  

          $insert="INSERT INTO idbrands(logo)VALUES('$img_name') ";
          $query=mysqli_query($con,$insert);
            
          $imgname=move_uploaded_file($tmp,$destinition);

         if($imgname){
             
             $_SESSION['band_upload']="your photo succeefully upload!";
             header('location: brand.php');
            
                
             }
             
                
            }
        }else{
            $_SESSION['error_photo']="your photo  error";
            header('location: brand.php');
        }

    }else{
        $_SESSION['error_photo']="your photo must be 1 MB";
        header('location: brand.php');
    }

   }else{
    $_SESSION['error_photo']="your photo must be jpg,png,jpeg";
    header('location: brand.php');
   }





  

?>