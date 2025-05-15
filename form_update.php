<?php
$conn=mysqli_connect("localhost","root","","phpsample");

// Get student record
$studentnum = $_GET['studentnum'];
$result = mysqli_query($conn, "SELECT * FROM student WHERE studentnum='$studentnum'");
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Record</title>
</head>
<body>
    <h2>Edit Student Record</h2>
    <form method="post" action="form_act.php">
        Student Number <input type="text" name="studentnum" value="<?php echo $row['studentnum']; ?>"><br>
        First Name <input type="text" name="fName" value="<?php echo $row['fName']; ?>"><br>
        Last Name <input type="text" name="lName" value="<?php echo $row['lName']; ?>"><br>
        Course <input type="text" name="course" value="<?php echo $row['course']; ?>"><br>
        Email <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Birthdate <input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>"><br>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>