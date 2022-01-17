<?php
session_start();
include '../Header.php';
?>


<?php
include '../dbconnection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM `display` WHERE `dispid`='$id'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT * FROM `display` WHERE `dispid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
        $_SESSION["BRAND"] = $row["brand"];
?>


        <section class="w3l-about-ab pt-lg-3" id="about">
            <div class="midd-w3 py-5">
                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="row">
                        <div class="col-lg-6 left-wthree-img pr-lg-4">
                            <div class="imgw3l-ab">
                                <img src="../<?php echo $row['img'] ?>" alt="" class="radius-image img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-4">
                            <div class="title-content text-left">
                                <h6 class="title-subhny"><?php echo $row['brand'] ?></h6>
                                <h3 class="title-w3l mb-4"><?php echo $row['display'] ?></h3>
                                <h3 class="title-w3l mb-4"><?php echo $row['rate'] ?></h3>
                            </div>
                            <hr style="border: 2px solid #731363; ">
                            <p class="pr-lg-5">Screen Size : <?php echo $row['size'] ?></p>
                            <p class="pr-lg-5">Resolution : <?php echo $row['resolution'] ?></p>
                            <p class="pr-lg-5">Panel : <?php echo $row['panel'] ?></p>
                            <p class="pr-lg-5">Speciality : <?php echo $row['speciality'] ?></p>

                            <a href="../Action/Cust1.php?id=<?php echo $row['dispid'] ?>&price=<?php echo $row['rate'] ?>" class="btn btn-outline-success btn-style mt-md-5 mt-4 ml-3"> Select<span class="fa fa-cart-plus ml-2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    }
} else {
    ?>
    <img src="../Nodata-pana.png" height="40%" width="40%" style=" margin-left: 350px; margin-right: auto;" />

<?php
}
?>

<?php
include '../Footer.php';
?>