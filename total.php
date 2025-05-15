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
    <a href="index.php"> -Return to List</a>&nbsp;
    
    <h2>Students by Course</h2>
        <table border="1" width="80%" style="border-collapse:collapse;">
            <tr>
                <th>Course</th>
                <th>Total Students</th>
            </tr>

        <?php
        
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
        
        </table>
    </center>
</body>
</html>