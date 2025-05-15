<?php
$conn=mysqli_connect("localhost","root","","phpsample");


$studentnum=$_POST['studentnum'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$course=$_POST['course'];
$email=$_POST['email'];
$birthdate=$_POST['birthdate'];


mysqli_query($conn, "UPDATE student SET 
    fName='$fName', 
    lName='$lName',
    course='$course',
    email='$email',
    birthdate='$birthdte'
    
    WHERE studentnum='$studentnum'");
?>

<script>
alert('Record Updated Successfully!');
window.location="index.php";
</script>