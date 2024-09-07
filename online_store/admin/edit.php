<?php
include('db.php');

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Name = $_POST['name'];
    $Pirce = $_POST['price'];
    $Image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $edit= "UPDATE `prod` SET 
    name='$Name'
    ,price='$Pirce',
    image='$image_up' WHERE id= $id ";
    mysqli_query($con, $edit);
    if(move_uploaded_file($image_location,"images/".$image_name)){
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    }else{
        echo "<script>alert('حدث خطا ,, لما يتم رفع المنتج')</script>";
    }
    header('location: index.php');
}