<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="Contact.css">
  
  <div class="header">
  <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
  <div class="header-right">
    <a href="index.html">Home</a>
    <a href="about.html" >About Us</a>
    <a href="problemset.php">Problems</a>
    <a href="contact.php" class="active">Contact Us</a>
    <a href="profile.php">My account</a>
    <a href="../index.html">Log out</a>
  </div>
</div>
<div class="container">  
  <form  action="contact.php" method="post" id="contact">
    <h3>HSTUOJ Contact Form</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" id = "name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" name="email" id = "email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="number" type="tel" tabindex="3" id = "phone" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" name="website" type="url" tabindex="4" id = "web" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="5" id = "message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" id = "contact_submit">Submit</button>
    </fieldset>
   
  </form>
</div>

<footer>
  <p class="text-center">Copyright &copy; HSTUOJ 2022</p>
</footer>


<?php

require('connection.php');

$sql="Select * from contact;";
echo 'Contact called';
$table_ache=mysqli_query($conn,$sql);

if(!$table_ache)
{
    $sql_create='CREATE TABLE  contact(
        id int NOT NULL AUTO_INCREMENT,
        username varchar(255),
        email varchar(255),
        user_number varchar(255),
        website varchar(255),
        user_message varchar(255),
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
    $num=$_POST['number'];
    $web=$_POST['website'];
    $message=$_POST['message'];

    //echo 'name : '.$name.', email : '.$email;
  //  $pass2=$_POST['confirmp'];

 // echo 'pass1 : '.$pass."pass2 : ".$pass2 . "<br>";

  
        
    $sql_query="INSERT INTO `contact`(`username`,`email`,`user_number`,`website`,`user_message`)
                VALUES('$name','$email','$num','$web','$message')";


    if(mysqli_query($conn,$sql_query))
    {
      echo "Contact information inserted successfully!";
    }
    else {
        echo "Error: " . $sql_query  .  " " . mysqli_error($conn);
         }

         mysqli_close($conn);

      
    
    
   

}


?>
