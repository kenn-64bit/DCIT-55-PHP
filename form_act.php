<?php
$conn=mysqli_connect("localhost","root","","phpsample");
$studentnum=$_POST['studentnum'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$course=$_POST['course'];

mysqli_query($conn,"INSERT INTO student VALUES ('$studentnum','$fName','$lName','$course')");
?>
<script>
alert('New Record Added!');
window.location="index.php";
</script>
