<?php
session_start();
include '../dbconnection.php';
$id = $_GET['id'];
$qry = "DELETE FROM `display` WHERE `dispid`='$id'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Removed Successfully")</script>';

    echo '<script>location.href="../Admin/AddDisplay.php"</script>';
} else {
    echo '<script>alert("Failed to Cancel")</script>';
    echo '<script>location.href="../Admin/AddDisplay.php"</script>';
}
?><a href=""