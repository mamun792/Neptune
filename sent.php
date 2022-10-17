<?php
require_once('db_controler.php');
if(isset($_POST['sent'])){
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['message'];

    $status=false;
    if(empty($name)){
        $_SESSION['name_error']="name is requeried";
        $status=true;
    }
    if(empty($email)){
        $_SESSION['email_error']="name is requeried";
        $status=true;
    }
    if(empty($desc)){
        $_SESSION['desc_error']="name is requeried";
        $status=true;
    }

    if($status){
        header('location: index.php');
    }

    $insert="INSERT INTO sent_message(name,email,message)
    values('$name','$email','$desc')";
    $query=mysqli_query($con,$insert);
    $_SESSION['sent']="Succeefully Sent";
    header('location: index.php');
}

?>