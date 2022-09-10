<?php
	
	include("config.php");
	
	if(isset($_POST['submit'])){
		$field=$_POST['field_name'];
		$roll=$_POST['roll_no'];
		$city=$_POST['city'];
		$email=$_POST['email'];
		$date=$_POST['date'];
		
		$sql = "INSERT INTO STUDENT(Field_Name , Roll_No , City , email , Date_of_Brith ) VALUES('$field', '$roll', '$city', '$email', '$date')";
				
		$result = mysqli_query($con,$sql);
	
		if($result){
			header("location:adds.php");
			echo "<h2>TABLE CREATE SUCCESSFUL</h2>";
		}
			
		else{
			echo "<h2>TABLE CREATE UNSUCCESSFUL</h2>";
		}
	}
?>