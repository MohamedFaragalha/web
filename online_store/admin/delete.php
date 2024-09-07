<?php
include('db.php');
$id = $_GET['id'];
$del = "DELETE FROM `prod` WHERE id = $id";
mysqli_query($con, $del);
header('location:products.php')

?>