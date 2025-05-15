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
    <form method="POST" action="update.php">
        <input type="hidden" name="studentnum" value="<?php echo $row['studentnum']; ?>">
        
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>
        
        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>
        

        <input type="submit" value="Update">
    </form>
</body>
</html>