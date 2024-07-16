<?php
$server  = "localhost";
$username = "root";
$password = "";
$dbname = "db_ecommerce";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}
else
{
    echo "connected";
}

//start
$name  = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";

$result = mysqli_query($con, $sql);

if($result)
{
    echo "data submitted";
}
else{
    echo "query failed";
}
?>
