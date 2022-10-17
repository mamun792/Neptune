<?php
session_start();
if(isset($_POST['s_btn'])){
  $u_name=$_POST['u_name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $c_pass=$_POST['c_pass'];
  
  $status=false;

  if(empty($u_name)){
    $_SESSION['error_name']="Name is requried";
    $status=true;
  }

  if(empty($email)){
    $_SESSION['error_email']="Email is requried";
    $status=true;
  }

  if(empty($phone)){
    $_SESSION['error_phone']="Phone number is requried";
    $status=true;
  }

  if(empty($pass)){
    $_SESSION['error_pass']="password is requried";
    $status=true;
  }else{
     if(strlen($pass)<8){
        $_SESSION['error_pass']="password must be 8 chater";
        $status=true;
     }
  }

  if(empty($c_pass)){
    $_SESSION['error_cpass']="Confium password is requried";
    $status=true;
  }else{
   if($pass!=$c_pass){
    $_SESSION['error_cpass']="password and confium not match";
    $status=true;
   }
  }


  if($status){
    header('location: User_Register.php ');
  }else{
    require('../../db_controler.php');

    $count="select count(*) as c from user_regi where email='$email' ";
    $query=mysqli_query($con,$count);
    $read=mysqli_fetch_array($query);
    
    if($read['c']==1){
        $_SESSION['error_email'] =" email alredy exits";
        header('location: User_Register.php ');
    }
    else{

        $encyped_pass= md5($pass);
        
       
        $insert="insert into user_regi(u_name,email,phone,pass)
        values('$u_name','$email','$phone','$encyped_pass') ";
        $query=mysqli_query($con,$insert);
        if($query){
              
            //sms send

            // 
            $url = "http://66.45.237.70/api.php";
                  $number="$phone";
                  $text="new account Email:$email, password:$pass ";
                  $data= array(
                     'username'=>"01834833973",
                     'password'=>"TE47RSDM",
                     'number'=>"$number",
                     'message'=>"$text"
                  );
                  
                  $ch = curl_init(); // Initialize cURL
                  curl_setopt($ch, CURLOPT_URL,$url);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  $smsresult = curl_exec($ch);
                  $p = explode("|",$smsresult);
                  $sendstatus = $p[0];

            $_SESSION['regi']="New user created and send sms $phone";
            // unset($_SESSION['error_email']);
            // unset($_SESSION['error_cpass']);
            // unset($_SESSION['error_pass']);
            // unset( $_SESSION['error_name']);
           header('location:User_Register.php ');
        }
    }

  }
}

?>