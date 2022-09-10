<?php
	include('config.php');
	$sql = "SELECT * FROM `student` ORDER BY Roll_No ASC";
	$result = mysqli_query($con,$sql);
?>

<html>
	<head>
		<title>Insert Data</title>
	</head>
	<body>
		<h1>INSERT DATA IN STUDENT TABLE</h1><hr>
		<form action="ab.php" method="POST" width="100%">
			<br>Field Name:<input type="text" name="field_name"><br>
			<br>Roll No:<input type="number" name="roll_no"><br>
			<br>City:<input type="text" name="city"><br>
			<br>Email:<input type="text" name="email"><br>
			<br>Date of Birth:<input type="date" name="date"><br>
			<br><input type="submit" name="submit">
			
		</form>
		<a href='query.php'><button>query</button></a>
		<br><br><br>
		<center>
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
		</center>
	</body>
</html>