<?php

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
echo "hello"

?>