

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
  
   if($extesion_end=='pdf' ){
   
    if($size<10000000){

        if($error==0){

        
       
            $img_name=time().rand(11111,22222).".".$extesion_end;
         
            $destinition="imges/CV/".$img_name;  

          $insert="INSERT INTO upload_pdf(cv_pdf)VALUES('$img_name') ";
          $query=mysqli_query($con,$insert);
            
          $imgname=move_uploaded_file($tmp,$destinition);

         if($imgname){
             
             $_SESSION['band_upload']="your pdf succeefully upload!";
             header('location: upload_cv.php');
            
                
             }
             
                
            }
        else{
            $_SESSION['error_photo']="your pdf  error";
            header('location: upload_cv.php');
        }

    }else{
        $_SESSION['error_photo']="your photo must be 10 MB";
        header('location: upload_cv.php');
    }

   }else{
    $_SESSION['error_photo']="your file must be pdf";
    header('location: upload_cv.php');
   }


}


  

?>