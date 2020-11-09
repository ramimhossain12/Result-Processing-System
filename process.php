
<?php 

$fonts = "arial";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
		
       .phpcoding{width: 990px;margin: 0 auto ; background: #9FBBE7   ;padding:20px;}
        .header,.footer{background: #000000;color:#fff;text-align: center; }
         .maincontent{min-height: 400px }

	</style>
 
</head>
<body>

<div class ="phpcoding">
	<SECTION class="header">
		
    <h2>***YOUR RESULT***</h2>
	</SECTION>

	<section class = "maincontent">



<?php

try{

$conn = new PDO("mysql:host=localhost;dbname=exam",'root','');

$regno=$_POST['regno'];
$result= $conn->query("select * from sub where regno='$regno'");
$result->setFetchMode(PDO::FETCH_ASSOC);
while($row=$result->fetch()){

	echo "YOUR ALL SUBJECT MARKSET******"."<br>";
	echo "ID Number is:" .$row['regno']."<br>";
	echo "Name: " .$row['name']."<br>";
	echo "PHP: " .$row['php']."<br>";
	echo "Java: " .$row['Java']."<br>";
	echo "Python: " .$row['Pyrhon']."<br>";
	
}
echo "Congrasulation.................";
}catch(PDOException $e){

	echo "Error:".$e->getMessage();
}


?>


</section>
	

<SECTION class="footer">
		<p>@copy; 2020 Result procacing system</p>
    <h2>Developer By Ramim Hossain</h2>
	</SECTION>

</div>

 

</body>
</html>