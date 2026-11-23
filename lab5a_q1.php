<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<title>Lab 5a Q1</title> 
</head> 
<body> 
	<?php  
		$name = "Muhammad Nabil Bin Mohd Nizam";
		$matricnum = "DI230001";
		$course = "Bachelor of Computer Science (Software Engineering) with Honours"; 
		$year = 3;
		$address = "Jitra, Kedah";
	?> 
	<table border="1" cellpadding="5"> 
		<tr> 
			<td>Name</td> 
			<td><?php echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Matric Number</td>
			<td><?php echo "$matricnum"; ?></td>
		</tr>	
		<tr>
			<td>Course</td> 
			<td><?php echo "$course"; ?></td>
		</tr>
		<tr>
			<td>Year of study</td> 
			<td><?php echo "$year"; ?></td>
		</tr>
		<tr>
			<td>Address</td> 
			<td><?php echo "$address"; ?></td>
		</tr> 
	</table> 
</body> 
</html>