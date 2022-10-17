<?php
require_once('../../db_controler.php');
$id=$_GET['id'];
$delete="DELETE FROM idbrands WHERE id=$id";
$query=mysqli_query($con,$delete);
if($query){
    $_SESSION['sweets']="Succeefully Delete";
    header('location: brand.php');
}
?>