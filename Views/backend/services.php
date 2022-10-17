<?php
//print_r($_POST);
session_start();
   if(isset($_POST['btn'])){
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $logo=$_POST['logo'];
    
   
 
    require_once('../../db_controler.php');

    if(isset($_POST['status'])==1){
        $status=1;
        
    }else{
       $status=0;
     
    }

    $insert="INSERT INTO Services(title,description,logo,status)
    values('$title','$desc','$logo',$status) ";
    echo $insert;
   
    $query=mysqli_query($con,$insert);
   
    if($query){
        //print_r($query);
        $_SESSION['suce']="Succeefully add";
       header('location: service.php');
    }
   }
?>