<?php
session_start();
require_once('../../db_controler.php');
if(isset($_POST['btn'])){
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $logo=$_POST['logo'];
    $id=$_POST['id'];
   
    require_once('../../db_controler.php');

    if(isset($_POST['status'])==1){
        $status=1;
        
    }else{
       $status=0;
     
    }
    $update="UPDATE Services SET title='$title',description='$desc',logo='$logo',status='$status'
    WHERE id=$id";
    
    $query=mysqli_query($con,$update);
    if($query){
        $_SESSION['msg']="Succeefully update";
        header('location: service.php');
    }
   
    
}
?>