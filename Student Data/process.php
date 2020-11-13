
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

    $conn = new PDO("mysql:host=localhost;dbname=to",'root','');
      //echo "Connection Successful";

      $student_id =$_POST['student_id'];
      $result = $conn->query("select * from college_student where student_id ='$student_id' ");
      $result->setFetchMode(PDO::FETCH_ASSOC);

      while($row=$result->fetch()){

        echo "Your ID Number :".$row['student_id']."<br>";
        echo "Your Name :".$row['name']."<br>";
        echo "Your Subject :".$row['majors']."<br>";
        echo "Gender :".$row['gender']."<br>";
        echo "Your Total Subject Avarage :".$row['address']."<br>";
      }
  
}catch(PDOException $e){

    echo "Error:".$e->getMessage();

}


?>


</section>
	

<SECTION class="footer">
		<p>@copy; 2020 Result Processing System</p>
    <h2>Developer By Ramim Hossain</h2>
	</SECTION>

</div>

 

</body>
</html>