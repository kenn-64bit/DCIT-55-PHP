<?php
$conn=mysqli_connect("localhost","root","","phpsample");

// Get form data
$studentnum = $_POST['studentnum'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
// Get other fields as needed

// Update the record
mysqli_query($conn, "UPDATE student SET 
    firstname='$firstname', 
    lastname='$lastname'
    /* Add other fields here */
    WHERE studentnum='$studentnum'");
?>

<script>
alert('Record Updated Successfully!');
window.location="index.php";
</script>