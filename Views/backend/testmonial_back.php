<?php
session_start();
require_once('../../db_controler.php');
if(isset($_POST['t_btn'])){
   
   
    $p_name=$_POST['testmonial_name'];
    $p_idea=$_POST['testmonial_idea'];
    $p_descprition=$_POST['testmonial_details'];
    $photo=$_FILES['imgs']['name'];
    $tem=$_FILES['imgs']['tmp_name'];
    $error=$_FILES['imgs']['error'];
    $size=$_FILES['imgs']['size'];

$extenion=explode(".",$photo);
$end=end($extenion);


 

 $status=false;
 if(empty($name)){
     $_SESSION['name']= "title is required";
     $status=true;
    
 }
 if(empty($p_category)){
     $_SESSION['cat']= "Descprition is required";
     $status=true;
     
 }
 if(empty($p_descprition)){
     $_SESSION['descp']= "idea is required";
     $status=true;
     
 }
 
 if($status){
     header('location: testmonial.php');
 }

 if($end=='png' || $end=='jpg' || $end=='jpeg'){
       
     if($size<20000000){
         if($error==0){
             $destnation="imges/testminil/".$photo;
             $imgname=move_uploaded_file($tem,$destnation);

             $insert="INSERT INTO testmonial(photo,descprition,name,idea)
             VALUES('$photo','$p_descprition','$p_name','$p_idea')";
             $query=mysqli_query($con,$insert);
             if($query){
                 $_SESSION['msg']="succeefully added";
                 header('location: testmonial.php'); 
             }
 
         }else{
             $_SESSION['siz']="error photo";
             header('location: testmonial.php'); 
         }
        
     }else{
         $_SESSION['siz']="Size must be 2MB";
          header('location: testmonial.php');
     }

   
    }else{

     $_SESSION['siz']="please submit jpg,png and jpeg";
      header('location: testmonial.php');
    }
}
?>