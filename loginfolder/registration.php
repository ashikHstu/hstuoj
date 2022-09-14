<?php

require('connection.php');

$sql="Select * from user_info;";

$table_ache=mysqli_query($conn,$sql);

if(!$table_ache)
{
    $sql_create='CREATE TABLE user_info (
        id int NOT NULL AUTO_INCREMENT,
        username varchar(255),
        email varchar(255),
        password varchar(255),
        PRIMARY KEY (id)
    );';

$create_hoiche=mysqli_query($conn,$sql_create);
if(!$create_hoiche)
{
    echo 'sorry! i failed <br>';
}
else {
    echo "Successfully table created.";
}

    
}



if(isset($_POST['submit']))
{
    
   
    $name=$_POST['name'];
    
    $email=$_POST['email'];
    $pass=$_POST['password'];
  //  $pass2=$_POST['confirmp'];

 //  echo 'pass1 : '.$pass."pass2 : ".$pass2 . "<br>";

  
        
    $sql_query="INSERT INTO `user_info`(`username`,`email`,`password`)
                VALUES('$name','$email','$pass')";


    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully!";
    }
    else {
        echo "Error: " . $sql_query  .  " " . mysqli_error($conn);
         }

         mysqli_close($conn);

      
    
    
   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="Signin.html"><b>Goto Login Page</b></a>
    
</body>
</html>