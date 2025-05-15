<?php
$conn=mysqli_connect("localhost","root","","phpsample");
$studentnum=$_GET['studentnum'];

mysqli_query($conn,"DELETE FROM student WHERE studentnum='$studentnum'");
?>
<script>
alert('Record Deleted!');
window.location="index.php";
</script>
