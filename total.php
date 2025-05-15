<?php
$conn=mysqli_connect("localhost","root","","phpsample");
$studentnum=$_GET['studentnum'];

mysqli_query($conn,"SELECT COUNT(studentnum) FROM student WHERE studentnum='$studentnum'");
?>

<script>
alert('All Total Students!');
window.location="index.php";
</script>
