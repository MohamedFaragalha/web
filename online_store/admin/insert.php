<?php
include('db.php');

if(isset($_POST['upload'])){
    $Name = $_POST['name'];
    $Pirce = $_POST['price'];
    $Image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $insert= "INSERT INTO prod (name, price, image) VALUES ('$Name','$Pirce','$image_up' )";
    mysqli_query($con, $insert);
    if(move_uploaded_file($image_location,"images/".$image_name)){
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    }else{
        echo "<script>alert('حدث خطا ,, لما يتم رفع المنتج')</script>";
    }
    header('location: index.php');
}





?>