<?php
session_start();
include '../dbconnection.php';
$cpid = $_SESSION['CPID'];
$qry = "UPDATE `cproduct` SET `status`='paid' WHERE `cpid`='$cpid'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Payment Successfully")</script>';

    echo '<script>location.href="../User/ViewCustomisedProduct.php"</script>';
} else {
    echo '<script>alert("Failed to Pay")</script>';
    echo '<script>location.href="../User/ViewCustomisedProduct.php"</script>';
}
?><a href=""