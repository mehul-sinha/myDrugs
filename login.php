<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'myDrugs');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn == false)
{
    dir('cannot connect'); 
}

$username = $_POST['email'];
$password = $_POST['pass'];

$sql = "select * from user where email='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$count=mysqli_num_rows($res);

if($count==1)
{
    header("location:./main.php");
}
else{
    echo "incorrect username or password";
}
?>