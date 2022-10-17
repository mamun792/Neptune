<?php
require_once('../../db_controler.php');
$id=$_GET['id'];
$delete="DELETE FROM work WHERE id=$id";
$query=mysqli_query($con,$delete);
if($query){
    $_SESSION['msgs']="Succeefully Delete";
    header('location: like.php');
}
?>