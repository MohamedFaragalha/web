<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>
    <style>
        h3{
            font-family: "Cairo", sans-serif;
            font-size: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 250px;
        }
        #n{
            width: 70%;
        }
        #m{
            margin-left: 70px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="m" class="navber-brand" href="cart.php"> My Cart | عربتي</a>

    </nav>
    <center>
        <h3>  المنتجات المتوفرة</h3>
    </center>
    <?php
    include('db.php');
    $reuslt = mysqli_query($con, "SELECT * FROM prod ");
    if (mysqli_num_rows($reuslt) > 0){
        while ($row = mysqli_fetch_array($reuslt)){ 
            echo "
            <center>
            <main id='n'>
                <div class='card' style='width: 16rem;'>
                <img src='$row[image]' class='card-img-top' >
                    <div class='card-body'>
                         <h5 class='card-title'>$row[name]</h5>
                         <p class='card-text'>$row[price]</p>
                         <a href='val.php?id=$row[id]' class='btn btn-success'>Add To Cart</a>
                    </div>
                </div>
            </main>
            </center>
            ";
        }
    };
    ?>
</body>

</html>