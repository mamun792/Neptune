<?php
session_start();
require_once('../../db_controler.php');

if(isset($_SESSION['email'])){

$current_pass=$_POST['c_pass'];
$new_pass=$_POST['n_pass'];
$confium_pass=$_POST['co_pass'];
$email=$_SESSION['email'];

//cheak current pass

$status=false;
if(empty($current_pass)){
    $_SESSION['error_current_pass']="current password is empty";
    $status=true;
}else{
    $_SESSION['cpass']=$current_pass;
}
if(empty($new_pass)){
    $_SESSION['error_new_pass']="new password is empty";
    $status=true;
}else{
   if(strlen($new_pass)<8){
    $_SESSION['error_new_pass']=" password must be 8 chater!";
    $status=true;
   }
}

if(empty($confium_pass)){
    $_SESSION['error_c_pass']="confirm password is empty";
    $status=true;
}
   
   if($status){
    header('location: profile.php');
   }else{
    $c=md5($current_pass);
    $count="select count(*) as c from user_regi where email='$email' and pass='$c'" ;
    $query=mysqli_query($con,$count);
     $read=mysqli_fetch_assoc($query);
     if($read['c']==0){
      
        $_SESSION['pass']="Your Current Password worng";
        header('location: profile.php');
       
     }else{
        if($new_pass==$confium_pass){

            $encrypt=md5($new_pass);
           $upde= "UPDATE user_regi SET pass = '$encrypt' WHERE  email= '$email' ";
          $query=mysqli_query($con,$upde);
          $_SESSION['pass']="password succeefully change";
          header('location: profile.php');

        }else{
            $_SESSION['pass']="Your confirm and new password  not same!";
        header('location: profile.php');
           
        }
   }
   }
  
}



     
        
         
     

?>