<?php

include('db.php');
if(isset($_POST['Add'])){
    $Name = $_POST['name'];
    $Pirce = $_POST['price'];
    $insert = "INSERT INTO `add cart`(`name`, `price`) VALUES ('$Name','$Pirce')"; 
    mysqli_query($con, $insert);
    header('location: cart.php');
}



?>