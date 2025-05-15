<?php
$conn = mysqli_connect("localhost", "root", "", "phpsample");

if (isset($_GET['studentnum'])) {
    $studentnum = $_GET['studentnum'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE studentnum='$studentnum'");
    $student = mysqli_fetch_assoc($result);
} else {
    echo "No student selected.";
    exit;
}
?>

<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <center>
        <h2>Edit Student</h2>
        <form method="post" action="edit_act.php">
            Student Number <input type="text" name="studentnum" value="<?= $student['studentnum'] ?>" readonly><br>
            First Name <input type="text" name="fName" value="<?= $student['fName'] ?>"><br>
            Last Name <input type="text" name="lName" value="<?= $student['lName'] ?>"><br>
            Course <input type="text" name="course" value="<?= $student['course'] ?>"><br>
            Email <input type="email" name="email" value="<?= $student['email'] ?>"><br>
            Birthdate <input type="date" name="birthdate" value="<?= $student['birthdate'] ?>"><br>
            <input type="submit" name="update" value="UPDATE">
        </form>
    </center>
</body>
</html>
