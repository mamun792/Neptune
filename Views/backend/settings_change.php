<?php
session_start();
require_once('../../db_controler.php');
foreach($_POST as $settings_name =>$settings_value){
    

    $update="update settings set settings_value='$settings_value' where settings_name='$settings_name'";
    $update_query=mysqli_query($con,$update);
    $_SESSION['up']="Succeefully Update";
    header('location: settings.php');
}
?>