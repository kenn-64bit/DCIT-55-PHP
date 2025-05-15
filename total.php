<!DOCTYPE html>
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
    
    <h2>Students by Course</h2>
        <table border="1" width="80%" style="border-collapse:collapse;">
            <tr>
                <th>Course</th>
                <th>Total Students</th>
            </tr>

        <?php
        // Get count of students by course
        $courseQuery = mysqli_query($conn, "SELECT course, COUNT(*) as total FROM student GROUP BY course ORDER BY course ASC");
        
        $totalStudents = 0;
        
        while($row = mysqli_fetch_array($courseQuery))
        {
            $totalStudents += $row['total'];
            ?>
            <tr>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['total']; ?></td>
            </tr>
            <?php
        }
        ?>
        
        <tr style="font-weight: bold; background-color: #f2f2f2;">
            <td>All Courses</td>
            <td><?php echo $totalStudents; ?></td>
        </tr>
        </table>
        
        <h2>Student List</h2>
        <table border="1" width="80%" style="border-collapse:collapse;">
            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
            </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM student ORDER BY lName ASC");
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td><?php echo $row['studentnum']; ?></td>
                <td><?php echo $row['fName']; ?></td>
                <td><?php echo $row['lName']; ?></td>
                <td><?php echo $row['course']; ?></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </center>
</body>
</html>