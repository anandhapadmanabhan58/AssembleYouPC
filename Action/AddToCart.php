<?php
session_start();
include '../dbconnection.php';
$id = $_GET['id'];
$price = $_GET['price'];
$uid = $_SESSION['USERID'];
$qry = "INSERT INTO `cart`(`uid`,`pid`,`type`,`total`)VALUES('$uid','$id','Product','$price')";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Added To Cart")</script>';

    echo '<script>location.href="../User/ViewProduct.php"</script>';
} else {
    echo '<script>alert("Failed to Add")</script>';
    echo '<script>location.href="../User/ViewProduct.php"</script>';
}
?><a href=""