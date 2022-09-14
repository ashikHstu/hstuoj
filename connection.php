<?php
$servername="localhost";
$username="root";
$password="";
$database_name="hstuoj";

$conn=mysqli_connect($servername,$username,$password,$database_name);


if(!$conn)
{
    die("connection Failed : " . mysqli_connect_error());
}
else {
  //  echo 'connection Successfull<br>';
}

?>


