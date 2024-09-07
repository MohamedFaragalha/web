<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل منتج  </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        include('db.php');
        $id = $_GET['id'];
        $edit =mysqli_query($con,"SELECT * FROM `prod` WHERE id = $id");
        $data = mysqli_fetch_array($edit);
    
    ?>
    <center>
        <div class="main">
            <form action="edit.php" method="POST" enctype="multipart/form-data">
            <h2>تعديل منتجات </h2>
            <input type="text" name="id" value="<?php echo $data['id'] ?>">
            <br>
            <input type="text" name="name" value="<?php echo $data['name'] ?>">
            <br>
            <input type="text" name="price" value="<?php echo $data['price'] ?>">
            <br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file">تحديث صورة المنتج</label>
            <button name="edit" type="submit">تعديل المنتج</button>
            <br><br>
            <a href="products.php">عرض كل المنتجات </a>
            </form>
        </div>
        <p>Developer by Fego</p>
    </center>
</body>
</html>