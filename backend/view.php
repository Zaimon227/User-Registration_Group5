<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
	<link rel="stylesheet" href="css\style.css">
</head>

<body>
	<div class="form">
		<h2>View Records</h2>
		<table width="100%" border="1" style="border-collapse:collapse;">
			<thead>
			<tr>
				<th><strong>First Name</strong></th>
				<th><strong>Last Name</strong></th>
				<th><strong>Access Level</strong></th>
				<th><strong>Address</strong></th>
				<th><strong>Password</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
			</tr>
			</thead>
			
			<tbody>
			
			<?php
			$sel_query="Select * from users";
			$result = mysqli_query($con,$sel_query);
			//while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td align="center"><?php echo $row["fname"];?></td>
				<td align="center"><?php echo $row["lname"];?></td>
				<td align="center"><?php echo $row["accesslevel"];?></td>
				<td align="center"><?php echo $row["address"];?></td>
				<td align="center"><?php echo $row["password"];?></td>
				<td align="center"><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
				<td align="center"><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
			</tr>
			</tbody>
		</table>
	</div>
</body>
</html>