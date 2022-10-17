<?php
session_start();
require_once('../../db_controler.php');
$id=$_GET['id'];
$delete="DELETE FROM Services WHERE id=$id";
$query=mysqli_query($con,$delete);
$_SESSION['msgd']="Succfully delete";
header('location:service.php');
?>