<?php
	include('config.php');
	$sql = "SELECT * FROM `student` WHERE Date_of_Birth>'2002.01.01' AND Date_of_Birth<'2005.12.31' ORDER BY Roll_No ASC;";
	$result = mysqli_query($con,$sql);
?>
<html>
	<body>
		<h1>The student whose date of birth in between 01.01.2002 - 31.12.2005</h1><hr>
		<br>
		<table border="1" width="100%">
			<tr>
				<th>Field Name</th>
				<th>Roll No</th>
				<th>City</th>
				<th>Email</th>
				<th>Date of Birth</th>
			</tr>
			<?php
				while($res=mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$res['Field_Name']."</td>";
					echo "<td>".$res['Roll_No']."</td>";
					echo "<td>".$res['City']."</td>";
					echo "<td>".$res['email']."</td>";
					echo "<td>".$res['Date_of_Birth']."</td>";
					echo "</tr>";
				}	
			?>
		</table>
	<body>
<html>