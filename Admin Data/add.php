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
      <h2>Admin Panel </h2>
	</SECTION>

	<section class = "maincontent">



<a href="index.php">Show Data</a>
<br><br>
<form method="post">
	Student ID : <input type="text" name="student_id" placeholder="Insert Student ID"><br><br>
	Name : <input type="text" name="name" placeholder="Insert Name"><br><br>
	Subject : <input type="text" name="majors" placeholder="Insert Majors"><br><br>
	Gender : 
  <select name="gender" >
  	<option value="Male">Male</option>
  	<option value="Female">Female</option>
  </select><br><br>
  <!-- <input type="text" name="gender" placeholder="Insert Gender"><br><br> -->
	CGPA : <input type="text" name="address" placeholder="Insert Address"><br><br>
	<input type="submit" name="add" value="Add">
	<input type="reset" name="reset" value="Cancel">
</form>
<?php
if(isset($_POST['add']))
{
include 'config.php';
  $student_id=$_POST['student_id'];
  $name=$_POST['name'];
  $majors=$_POST['majors'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
 
  $sql="INSERT INTO college_student (student_id,name,majors,gender,address) VALUES ('$student_id','$name','$majors','$gender','$address')";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { 
    echo "<script>alert('Add Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   


</section>

<SECTION class="footer">
		 
    <h2>Developer By Ramim Hossain</h2>
	</SECTION>
	
</div>
 

</body>
</html>

