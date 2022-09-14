<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id='signinok'>



<?php

require('connection.php');

$sql="Select * from user_info;";

$table_ache=mysqli_query($conn,$sql);

if(!$table_ache)
{
    echo 'No user registered yet for this site! please register first to login!';
}


if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];

   // echo 'name or email : '.$name.'password: '.$password.'<br>';
    // $pass2=$_POST['confirmp'];
    // echo 'pass1 : '.$pass."pass2 : ".$pass2 . "<br>";     
  $search_user="SELECT * FROM user_info WHERE email = '" . $name. "' and password = '" .$password."'";

    $result = mysqli_query($conn, $search_user);
    if(!empty($result)){

        echo "connection from !empty(result) <br>";
         if ($row = mysqli_fetch_array($result)) {

            echo "connection successfull from mysqli_fetch_array<br>";


            echo 'UserName : '.$row['username'].',<br>Email : '.$row['email'].'<br>';

            //  $_SESSION['user_id'] = $row['uid'];
            //  $_SESSION['user_name'] = $row['name'];
            //  $_SESSION['user_email'] = $row['email'];
            //  $_SESSION['user_mobile'] = $row['mobile'];
            // header("Location: index.html");
            ?>

     
         <script src="headerchange.js"></script>

         

            <?php


         } 
         else {
             echo 'Error : Password or email incorrect!';
            $error_message = "Incorrect Email or Password!!!";
        }
   

     }else {
        echo 'Error : Password or email incorrect!';
         $error_message = "Incorrect Email or Password!!!";
     }




         mysqli_close($conn);
   
}


?>



<a href="index.html"><b>Goto Home Page</b></a>
    
</body>
</html>