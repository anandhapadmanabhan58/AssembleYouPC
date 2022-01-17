<?php
session_start();
include '../dbconnection.php';
$uid = $_SESSION['USERID'];
$qry = "UPDATE `cart` SET `status`='paid' WHERE `uid`='$uid' AND `status`='Cart'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Payment Successfully")</script>';

    echo '<script>location.href="../User/ViewCart.php"</script>';
} else {
    echo '<script>alert("Failed to Pay")</script>';
    echo '<script>location.href="../User/ViewCart.php"</script>';
}
?><a href=""