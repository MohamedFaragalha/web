<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <style>
      h3{
        font-family: 'Cairo',sans-serif;
        font-weight: bold;
      }
      main{
        width: 40%;
        margin-top: 40px;
      }
      table{
        box-shadow: 1px 1px 10px silver;
      }
      tbody{
        text-align: center;
      }
    </style>
</head>
<body>
  <center>
    <h3>My Product</h3>
  </center>
<?php
    include('db.php');
    $result = mysqli_query($con,"SELECT * FROM `add cart`");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
            <main>
                <table class='table'>
                     <thead>
                      <tr>
                            <th scope='col'>Product name</th>
                            <th scope='col'>Product price</th>
                            <th scope='col'>Delete product</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><a href='del_cart.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                      </tr>
                    </tbody>
                </table>
            </main>
        </center>
        
        ";
    }
    ?>
    <center>
      <a href="store.php">Home Page</a>
    </center>
</body>
</html>