<html>
<head>
<title>Student Record</title>
<?php
$conn=mysqli_connect("localhost","root","","phpsample");
?>
</head>
<body>
	<center>
	<a href="form.php"> +Add New Student</a>&nbsp;
	<a href="total.php"> ?Check Total Students</a>
		<table border="1" width="80%" style="border-collapse:collapse;">

			<tr>
				<th>Department</th>
				<th>Total Students</th>
			</tr>

		<?php
		$result=mysqli_query($conn,"SELECT * FROM student ORDER BY lName ASC");
		while($row=mysqli_fetch_array($result))
		{
			?>
			<tr>
			<td><?php echo $row['studentnum'];?></td>
			<td><?php echo $row['fName'];?></td>
			<td><?php echo $row['lName'];?></td>
			<td><?php echo $row['course'];?></td>
			<?php
		}
		?>
		</table>
	</center>
</body>
</html>
