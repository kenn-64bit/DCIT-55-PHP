<?php
$conn=mysqli_connect("localhost","root","","phpsample");

$studentnum=$_POST['studentnum'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$course=$_POST['course'];
$email=$_POST['email'];
$birthdate=$_POST['birthdate'];

$result=mysqli_query($conn,"SELECT * FROM student WHERE studentnum='$studentnum'");
if(mysqli_num_rows($result) > 0) {
    echo "<script>
    alert('Student Number already exists! Please enter a unique number.');
    window.location='form.php';
    </script>";
} else {
    mysqli_query($conn,"INSERT INTO student VALUES('$studentnum','$fName','$lName','$course','$email','$birthdate')");
    echo "<script>
    alert('New Record Added!');
    window.location='index.php';
    </script>";
}
?>