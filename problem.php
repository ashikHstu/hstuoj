<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="about.css">


<div class="header">
    <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
    <div class="header-right">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="problemset.php" class="active">Problems</a>
        <a href="contact.php">Contact Us</a>
        <a href="signup.html">Sign Up</a>
        <a href="signin.html">Sign In</a>
    </div>
</div>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>

<body>

     <?php
     require('connection.php');
        $id=$_GET['id'];
        $title=$_GET['title'];
        $statement=$_GET['statement'];
        $input=$_GET['input'];
        $output=$_GET['output'];


        $sql1='select * from problemset where id='.$id.';';
        $res=mysqli_query($conn,$sql1);

        if ($row = mysqli_fetch_array($res)) {

            $title=$row['title'];
         } 



     ?>

    <div class="wrapper">
        <div class="hr">
            <hr>
            <h2>
                
            <?php

        echo $title;
?>
   
            </h2>
            <hr>
        </div>

        <?php

           echo $statement;
        ?>

    </div>

    <div class="wrapper">
        <h2>Sample Input : </h2>
        <div>
        <?php

echo $input;
?>

        </div>






    </div>

    <div class="wrapper">
        <h2>Sample Output : </h2>
        <div>
        <?php

echo $output;
?>

        </div>
    </div>



    </div>
</body>

</html>

<footer>
    <p class="text-center">Copyright &copy; HSTUOJ 2022</p>
</footer>