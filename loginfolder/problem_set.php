<!doctype html>
<link rel="stylesheet" href="problem_set.css">

<div class="header">
  <img src="https://www.hstuoj.online/dipu/wp-content/uploads/2022/02/HSTUOJ.png" alt="HSTUOJ" />
  <div class="header-right">
  <a href="index.html">Home</a>
    <a href="about.html">About Us</a>
    <a href="problemset.php" class="active">Problems</a>
    <a href="contact.php">Contact Us</a>
    <a href="profile.php">My account</a>
    <a href="../index.html">Log out</a>
  </div>
</div>

<?php
     require('connection.php');
        $problem_id=$_GET['problem_id'];
        $problem_title=$_GET['title'];
        $problem_statement=$problem_title;
        $input_description=$problem_title;
        $output_description=$problem_title;
        $sample_input=$problem_title;
        $sample_output=$problem_title;



        $sql1='select * from problemset where problem_id='.$problem_id.';';
        $res=mysqli_query($conn,$sql1);

        if(!$res)
        {
               echo 'query failed';
        }

        if ($row = mysqli_fetch_array($res)) {
            $problem_title=$row['problem_title'];
            $problem_statement=$row['problem_statement'];
            $input_description=$row['input_description'];
            $output_description=$row['output_description'];
            $sample_input=$row['sample_input'];
            $sample_output=$row['sample_output'];
            
         }
       
     ?>


<div class="title" style="text-align: center;"><strong>

     
  <?php
echo $problem_id.'. ';
  echo $problem_title;
?>

</strong></div>
<div class="title" style="text-align: center;">
<div class="time-limit">
<div class="property-title">time limit per test : 2 second</div>
</div>
<div class="memory-limit">
<div class="property-title">memory limit per test : 256 megabytes</div>
</div>
<div class="input-file">
<div class="property-title">input : standard input</div>
</div>
<div class="output-file">
<div class="property-title">output : standard output</div>
<div class="property-title">

  <?php
    
           echo $problem_statement;
        ?>

</p>
<div class="input-specification">
<div class="section-title" style="text-align: left;"><strong>Input Description</strong></div>

<?php

echo $input_description;
?>

</div>
<div class="output-specification">
<div class="section-title" style="text-align: left;"><strong>Output Description</strong></div>

<?php

echo  $output_description;
?>

</div>
</div>
</div>
<table>
    <tr>
        <th>Sample Input</th>
    </tr>
    <tr>
        <td><span style="color: #000000;">
          
          
          <?php

          echo $sample_input;
          ?>
        
        </span></td>
    </tr>
</table>
<div class="title" style="text-align: center;">&nbsp;</div>
<table>
    <tr>
        <th>Sample Output</th>
    </tr>
    <tr>
        <td><span style="color: #000000;">
          
          
          
          <?php

          echo $sample_output;
          ?>
        
        </span></td>
    </tr>
</table>





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





.button {border-radius: 15px;}

</style>
</head>
<body>

<p style="text-align: center;"><button class="button">  <?php echo "<a href='compiler1/index.php?problem_id=$problem_id'> Solve </a>" ?> </button></p>

</body>
</html>
<p style="text-align: center;">&nbsp;</p>




<footer>
  <p class="text-center">Copyright &copy; HSTUOJ 2022</p>
</footer>