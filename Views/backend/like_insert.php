<?php
session_start();
require_once('../../db_controler.php');
if(isset($_POST['btn'])){
    
    $number=$_POST['number'];
    $descprition=$_POST['desc'];
    $status=$_POST['status'];
    $logo=$_POST['logo'];

    if($status==1){
        $status=1;
    }else{
       $status=0;
    }

    $insert="INSERT INTO work(logo,number,descprition,status)
    VALUES('$logo','$number','$descprition','$status')";
    $query=mysqli_query($con,$insert);
    if($query){
        $_SESSION['msg']="Succeefully Add";
        header('location: like.php');
    }

}