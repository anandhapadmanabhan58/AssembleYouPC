<?php
session_start();
include '../dbconnection.php';
$uid = $_SESSION['USERID'];
$brand = $_SESSION['BRAND'];
$id = $_GET['id'];
$price = $_GET['price'];
$qry = "INSERT INTO `cproduct`(`uid`,`dispid`,`brand`,total)VALUES('$uid','$id','$brand',$price)";
$exe = mysqli_query($conn, $qry);
if ($exe) {
    $qry = mysqli_query($conn, "SELECT MAX(`cpid`) AS MAX FROM `cproduct`");
    while ($row = mysqli_fetch_array($qry)) {
        $_SESSION["CPID"] = $row["MAX"];
    }

    echo '<script>location.href="../User/ViewHardDisk.php"</script>';
} else {
    echo '<script>location.href="../User/ViewHardDisk.php"</script>';
}
?><a href=""