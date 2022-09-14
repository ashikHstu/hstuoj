<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemset</title>

   <style media="screen">
table{
    border:1 px solid black;
    border-collapse: collapse;
    width: 1000px;
    margin-left:200px;
    margin-top: 50px;
}
th{
    border: 2px solid black;
    font-size: 20px;
    padding: 6px;
    font-weight: bold;
}
td{
    border: 1px solid black;
    text-align: center;
    padding: 6px;
    font-size: 19px;
  

 
}
tr:nth-child(odd)
{
    background-color: teal;
}
tr:nth-child(even)
{
    background-color: azure;
}


body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to left, #76b852, #4b8ef1);;
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
      background: rgb(255,255,255);
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

<script>



    
</script>

<link rel="stylesheet" href="header.css">

  <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
  <div class="header-right">
  <a href="index.html">Home</a>
    <a href="about.html" >About Us</a>
    <a href="problemset.php" class="active">Problems</a>
    <a href="contact.php">Contact Us</a>
    <a href="profile.php">My account</a>
    <a href="../index.html">Log out</a>
  </div>
</div>


<?php
require('connection.php');




?>
<table>
<th>Problem Id</th>
<th>Problem Title</th>
<th>Status</th>
<a href="problem_set.php">
  

<?php

$sql="Select * from problemset";
$query=mysqli_query($conn,$sql);
$ct=1;
while($info=mysqli_fetch_array($query))
{
    ?>


    <tr>
        <td><?php echo "<a href='problem_set.php?problem_id={$info['problem_id']}&title={$info['problem_title']}'> {$info['problem_id']} </a>"     ?></td>
        <td><?php echo "<a href='problem_set.php?problem_id={$info['problem_id']}&title={$info['problem_title']}'> {$info['problem_title']} </a>" ?></td>
        <td><?php echo "Not accepted"    ?></td>
       
    </tr>

    <?php
    $ct=$ct+1;
}




?>



</a>

</table>

<a href="request_problem.php" class="align-center text-center">  

<style>
.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 400px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  alignment:center;
  transition: all 0.8s
  
  
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

.button {border-radius: 15px;}

</style>
</head>
<body>

<p style="text-align: center;"><button class="button">Request a Problem</button></p>
</a>

</body>
</html>
<p style="text-align: center;">&nbsp;</p>



</body>
</html>