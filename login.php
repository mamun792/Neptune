<?php
session_start();
require('db_controler.php');
if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);



    $count="select count(*) as c from user_regi
     where email='$email' and pass='$pass'" ;
     $query=mysqli_query($con,$count);
     $read=mysqli_fetch_assoc($query);
     if($read['c']==1){
        $_SESSION['email']=$email;
        header('location: Views/backend/dashbord.php');
     }else{
        $_SESSION['msg']= "email or password worng";
         
     }
   
    // session_unset();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/Backend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/Backend/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/Backend/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="assets/Backend/css/main.min.css" rel="stylesheet">
    <link href="assets/Backend/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/Backend/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/Backend/images/neptune.png" />

</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="register.php">Sign Up</a></p>
           
           
            <div class="auth-credentials m-b-xxl">
                <form action="" method="post">
                <?php if(isset($_SESSION['msg'])){?>
            <div class="alert alert-success text-center"><?php echo $_SESSION['msg']; ?></div>
         <?php  } ?> 
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" name="email" id="signInEmail" aria-describedby="signInEmail">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="signInPassword" aria-describedby="signInPassword" ">
               <br>
                <input type="submit" class="btn btn-primary" value="sign-in" name="btn">
            </div>
           
                </form>

               
                      
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="assets/Backend/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/Backend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Backend/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/Backend/plugins/pace/pace.min.js"></script>
    <script src="assets/Backend/js/main.min.js"></script>
    <script src="assets/Backend/js/custom.js"></script>
</body>
</html>