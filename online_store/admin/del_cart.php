<?php
include('db.php');
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM `add cart` WHERE id = $id");
header('location: cart.php');



?>