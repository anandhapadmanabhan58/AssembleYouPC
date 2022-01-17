<?php
session_start();
include '../dbconnection.php';
$id = $_GET['id'];
$qry = "DELETE FROM `brand` WHERE `brandid`='$id'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Removed Successfully")</script>';

    echo '<script>location.href="../Admin/AddBrand.php"</script>';
} else {
    echo '<script>alert("Failed to Cancel")</script>';
    echo '<script>location.href="../Admin/AddBrand.php"</script>';
}
?><a href=""