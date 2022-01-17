<?php
session_start();
include '../dbconnection.php';
$id = $_GET['id'];
$qry = "UPDATE `cart` SET `status`='Delivered' WHERE `uid`='$id' AND `status`='paid'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Marked As Delivered")</script>';

    echo '<script>location.href="../Admin/ViewUserOrder.php"</script>';
} else {
    echo '<script>alert("Failed to Pay")</script>';
    echo '<script>location.href="../Admin/ViewUserOrder.php"</script>';
}
?><a href=""