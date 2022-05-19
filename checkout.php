<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="checkout.css">
  </head>
  <body>
  <form action="" method="post">
  <div class="mb-3 mx-3">
  
  <label for="name" class="form-label my-4">Name</label>
  <input type="text" id="name" name="name" placeholder="Enter full name">
  <br>

  <label for="exampleFormControlInput1" class="form-label my-3">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name = "email">
  <br>

  <label for="phone_no" class="form-label my-4">Phone no.</label>
  <input type="number" id="phone_no" name="phone" placeholder="10 digit">
  <br>

  <div class="mb-3 my-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  <br>
</div>
</div>
<div class="container my-2">
  <div class="vertical-center my-2">
  <button type="submit" class="btn btn-success" id="buy-button" name='btn'>CONFIRM BUY</button>
  </div>
</div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['btn']))
{
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    

$url_components = parse_url($url);
  
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$servername="localhost";
$username="root";
$password="";
$database_name="myDrugs";
$conn=mysqli_connect($servername,$username,$password,$database_name);
 mysqli_query($conn,"UPDATE drugs set stock=stock-1 where id=".$params['id']);
 header("location:./main.php");
}
?>