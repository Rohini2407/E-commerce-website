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

$name= $_POST['name'];
$phone = $_POST['phone'];


$sql = "INSERT INTO `submit`(`name`, `mobile no`) VALUES ('$name','$phone')";

$result = mysqli_query($con, $sql);

if($result)
{
    echo "data submitted";
}
else{
    echo "query failed";
}
?>
