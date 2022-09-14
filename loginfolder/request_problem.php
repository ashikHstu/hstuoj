<!DOCTYPE html>
<link rel="stylesheet" href="request_problem.css">
  
  <div class="header">
  <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
  <div class="header-right">
  <a href="index.html">Home</a>
    <a href="about.html" >About Us</a>
    <a href="problemset.php" class="active">Problems</a>
    <a href="contact.html">Contact Us</a>
    <a href="profile.php">My account</a>
    <a href="../index.html">Log out</a>
  </div>
</div>
<div class="container">  
  <form id="contact" action="request_problem.php" method="post">
    <h3>Problem Request Form</h3>
    <h4>Add problem details here</h4>
    <label for="fname">Problem Title</label>
      <textarea name="problem_title" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
    	<label for="fname">Problem Statement</label>
      <textarea name="problem_statement" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
    	<label for="fname">Input Description</label>
      <textarea name="input_description" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
    	<label for="fname">Output Description</label>
      <textarea name="output_description" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
	<label for="fname">Sample Input</label>
      <textarea name="sample_input" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
    <fieldset>
	<label for="fname">Sample output</label>
      <textarea name="sample_output" placeholder="Type your message here...." tabindex="5" id = "message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" id = "contact_submit">Request Problem</button>
    </fieldset>
  </form>
</div>

<footer>
  <p class="text-center">Copyright &copy; HSTUOJ 2022</p>
</footer>





<?php

require('connection.php');

$sql="Select * from problemset;";
echo 'Contact called';
$table_ache=mysqli_query($conn,$sql);

if(!$table_ache)
{
    $sql_create='CREATE TABLE problemset(
        problem_id int NOT NULL AUTO_INCREMENT,
        problem_title varchar(255),
        problem_statement varchar(255),
        input_description varchar(255),
        output_description varchar(255),
        sample_input varchar(255),
        sample_output varchar(255),
        current_status varchar(10),
        PRIMARY KEY (problem_id)
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
    
  $problem_title=$_POST['problem_title'];
    $problem_statement=$_POST['problem_statement'];
    $input_description=$_POST['input_description'];
    $output_description=$_POST['output_description'];
    $sample_input=$_POST['sample_input'];
    $sample_output=$_POST['sample_output'];
    $current_status='0';

    //echo 'name : '.$name.', email : '.$email;
  //  $pass2=$_POST['confirmp'];

 // echo 'pass1 : '.$pass."pass2 : ".$pass2 . "<br>";

  
        
    $sql_query="INSERT INTO problemset(problem_title,problem_statement,input_description,output_description,sample_input,sample_output,current_status)
                VALUES('$problem_title','$problem_statement','$input_description','$output_description','$sample_input','$sample_output','$current_status')";


    if(mysqli_query($conn,$sql_query))
    {
      echo "Problem Requested successfully!";
    }
    else {
        echo "Error: " . $sql_query  .  " " . mysqli_error($conn);
         }

         mysqli_close($conn);
  
   

}


?>