<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style media="screen">
        table {
            border: 1 px solid black;
            border-collapse: collapse;
            width: 1000px;
            margin-left: 200px;
            margin-top: 50px;
        }

        th {
            border: 2px solid black;
            font-size: 20px;
            padding: 6px;
            font-weight: bold;
        }

        td {
            border: 1px solid black;
            text-align: center;
            padding: 6px;
            font-size: 19px;



        }

        tr:nth-child(odd) {
            background-color: teal;
        }

        tr:nth-child(even) {
            background-color: azure;
        }


        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to left, #76b852, #4b8ef1);
            ;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            width: 100%;
            box-shadow: 0 0 5px black;
            text-align: center;
            height: 40px;
            justify-content: center;
            align-items: center;
            font-size: 25px;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: rgb(255, 255, 255);
            margin: 10px auto;
            padding: 5px 30px;
            width: 800px;
            box-shadow: 0 0 5px black;
        }

        .hr {
            display: flex;
            align-items: center;
        }

        hr {
            width: 30px;
            height: 1px;
            background: black;
            margin: 0 15px;
        }

        h2 {
            font-size: 25px;
            font-weight: normal;
            text-transform: uppercase;
        }

        .mission-txt {
            font-size: 18px;
            font-weight: 500px;
            font-style: italic;
            margin-top: 0;
        }

        div img {
            width: 150px;
            filter: drop-shadow(0 10px 5px black);
        }

        p {
            text-align: justify;
        }

        .faculties {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .unit {
            margin: 25px;
            width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .unit img {
            border-radius: 100px;
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .unit p {
            text-align: left;
            margin: 2px;
        }

        .unit p:first-of-type {
            font-weight: bolder;
            margin-bottom: 5px;
        }

        @media screen and (max-width:820px) {
            .wrapper {
                width: 80%;
                padding: 5px 30px;
            }
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>


    <div class="header">

        <link rel="stylesheet" href="header.css">

        <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
        <div class="header-right">
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="problemset.php">Problems</a>
            <a href="contact.php">Contact Us</a>
            <a href="signup.html" class="active">My Account</a>
            <a href="signin.html">Log Out</a>
        </div>
    </div>



</body>

</html>



<?php

require('connection.php');

$sql = "Select * from user_info;";

$table_ache = mysqli_query($conn, $sql);

if (!$table_ache) {
    echo 'No user registered yet for this site! please register first to login!';
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // echo 'name or email : '.$name.'password: '.$password.'<br>';
    // $pass2=$_POST['confirmp'];
    // echo 'pass1 : '.$pass."pass2 : ".$pass2 . "<br>";     
    $search_user = "SELECT * FROM user_info WHERE email = '" . $name . "' and password = '" . $password . "'";

    $result = mysqli_query($conn, $search_user);
    if (!empty($result)) {

        //  echo "connection from !empty(result) <br>";
        if ($row = mysqli_fetch_array($result)) {

            echo "Successfully logged in!<br>";

            $current_user=$row['id'];

// After Successfull loggedin, storing current user info
//----------------------------------------------------------------------
            $sql = "Select * from cur_user;";

            $table_ache = mysqli_query($conn, $sql);

            if($table_ache)
            {
                $sql_delete='DROP table cur_user';
                $create_hoiche = mysqli_query($conn, $sql_delete);
            }

          

                $sql_create = 'CREATE TABLE cur_user(
                    id int 
                );';

                $create_hoiche = mysqli_query($conn, $sql_create);
                if (!$create_hoiche) {
                    echo 'sorry! i failed to create current user table <br>';
                } else {
                    echo "Successfully table created.";
                }
            
              $sql_store="INSERT INTO cur_user(id)
              VALUES('$current_user')";
              mysqli_query($conn, $sql_store);







?>



            <a href="loginfolder/index.html"><b>Goto Home Page</b></a>
            <?php


            //  echo 'UserName : '.$row['username'].',<br>Email : '.$row['email'].'<br>';

            //  $_SESSION['user_id'] = $row['uid'];
            //  $_SESSION['user_name'] = $row['name'];
            //  $_SESSION['user_email'] = $row['email'];
            //  $_SESSION['user_mobile'] = $row['mobile'];
            // header("Location: index.html");
            ?>






<?php


        } else {
            echo 'Error : Password or email incorrect!';
            $error_message = "Incorrect Email or Password!!!";
        }
    } else {
        echo 'Error : Password or email incorrect!';
        $error_message = "Incorrect Email or Password!!!";
    }




    mysqli_close($conn);
}


?>