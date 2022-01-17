<?php
session_start();
include '../dbconnection.php';
$max = $_SESSION['CPID'];
$sel = mysqli_query($conn, "SELECT `total` FROM `cproduct` WHERE `cpid`='$max'");
$row = mysqli_fetch_array($sel);
$cprice = $row['total'];
$id = $_GET['id'];
$rate = $_GET['rate'];
$total = $cprice + $rate;
$qry = "UPDATE `cproduct` SET `ramid`='$id',`total`='$total' WHERE `cpid`='$max'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>location.href="../User/CustomProduct.php"</script>';
} else {
    echo '<script>location.href="../User/CustomProduct.php"</script>';
}
?><a href=""