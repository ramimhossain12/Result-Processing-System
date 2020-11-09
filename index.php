
<?php 

$fonts = "arial";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Result System</title>
	<style>
		
       .phpcoding{width: 990px;margin: 0 auto ; background: #FFC300  ;padding:20px;}
       .header,.footer{background: #000000 ;color:#53B600 ;text-align: center; }
         .maincontent{min-height: 400px }

	</style>
</head>
<body>

	<div class ="phpcoding">
	<SECTION class="header">
		
    <h2>Daffodil international university <br/
    	>Result Processing System</h2>
	</SECTION>

	<section class = "maincontent">

 

<form name="Result" method="POST" action="process.php">
	<b>Enter Your University ID Number: </b>
	<input type="text" name="regno">
	<input type="submit" name="search">
</form>

</section>

<SECTION class="footer">
		<p>@copy: 2020 Result Processing System</p>
    <h2>Developer By Ramim Hossain</h2>
	</SECTION>
	
</div>
 

</body>
</html>