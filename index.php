<html>
<head>
<title>Student Record</title>
<?php
$conn=mysqli_connect("localhost","root","","phpsample");
?>
</head>
<body>
<center>
    <a href="form.php">+Add New Student</a>&nbsp;
    <a href="total.php">+Total Students</a>

    <table border="1" width="80%" style="border-collapse:collapse;">

    <tr>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th>Email</th>
        <th>Birthdate</th>
        <th>Delete Data</th>
        <th>Edit Data</th>
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
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['birthdate'];?></td>
        <td align="center"><a href="delete.php?studentnum=<?php echo $row['studentnum'];?>" onclick="return confirm('Are you sure you want to delete this record?');">X</a></td>
        <td align="center"><a href="edit.php?studentnum=<?php echo $row['studentnum'];?>" onclick="return confirm('Are you sure you want to edit this record?');">X</a></td>

        </tr>
        <?php
    }
    ?>
    </table>
</center>
</body>
</html>
