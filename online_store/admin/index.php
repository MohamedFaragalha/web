<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | اضافات منتجات </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <h2>اونلاين ستور</h2>
            <img src="online-store-logo.jpg" alt="logo" width="270px">
            <input type="text" name="name">
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file">اختيار صورة للمنتج</label>
            <button name="upload">رفع المنتجات ✔</button>
            <br><br>
            <a href="products.php">عرض كل المنتجات </a>
            </form>
        </div>
        <p>Developer by Fego</p>
    </center>
</body>
</html>