<?php
$insert = false;
if(isset($_POST['username'])){

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'myDrugs');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //check for connection success
    if(!$conn){
        die("Connection to database failed due to". mysqli_connect_error());
    }

    //collect post variables
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `user` (`email`, `password`) VALUES ('$username', '$password');";

    //Execute the query
    if($conn->query($sql)){
        //flag for successful insertion
        $insert = true;
        header("location:./");
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    //close the database connection
    $conn->close();
}

?>