<?php
require_once('../../db_controler.php');
if(isset($_POST['s_btn'])){
    $skill_nmae=$_POST['skill_nmae'];
    $skill_details=$_POST['skill_details'];
    $skill_range=$_POST['skill_range'];

    $insert="INSERT INTO skills(skill_nmae,skill_details,skill_range)
    values('$skill_nmae','$skill_details','$skill_range')";
   $query=mysqli_query($con,$insert);
}
?>