<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>






	
    <?php 

$fonts = "arial";

 ?>
<!DOCTYPE html>
<html>
<head>
 
	<title>Online Result System</title>
	
	<style>
			 
       .phpcoding{width: 990px;margin: 0 auto ; background: #0000;text-align: center;}
       .header,.footer{background: #58D68D ;color:#000000 ;text-align: center; }
	   
	  .maincontent{min-height: 370px }

	</style>

</head>
<body background = "ff.jpg">
<body>

	<div class ="phpcoding">
	
	
	<SECTION class="header">
	<img src="ee.png">
    <h2>Daffodil international university <br/
    	>Result Processing System</h2>
		<h2>Student Portal <br/
    	</h2>
	</SECTION>

	<section class = "maincontent">

<html>
<head>
<br><br><titile><b> Academic Result Check</b></title></br></br>
</head>
<br></br>
<body>

<form name="Result" method="POST" action="process.php">
<b>Enter Your University ID Number: </b>
	<input type="text" name="student_id">
	<input type="submit" name="search">


	</section>

<SECTION class="footer">
		<p>Result Processing System</p>
    <h2>Developer By Ramim Hossain</h2>
	</SECTION>
	
</div>
 

</body>
</html>





    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>