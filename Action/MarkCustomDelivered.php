<?php
session_start();
include '../dbconnection.php';
$cpid = $_SESSION['CPID'];
$qry = "UPDATE `cproduct` SET `status`='Delivered' WHERE `cpid`='$cpid'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Successfully")</script>';

    echo '<script>location.href="../Admin/ViewCustomisedOrder.php"</script>';
} else {
    echo '<script>alert("Failed to Pay")</script>';
    echo '<script>location.href="../Admin/ViewCustomisedOrder.php"</script>';
}
?><a href=""