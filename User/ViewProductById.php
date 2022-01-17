<?php
session_start();
include '../Header.php';
?>

<?php
include '../dbconnection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM `product` WHERE `pid`=$id");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT * FROM `product` WHERE `pid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
?>



        <section class="w3l-about-ab pt-lg-3" id="about">
            <div class="midd-w3 py-5">
                <div class="container py-lg-5 py-md-4 py-2">
                    <hr style="border: 2px solid #731363; ">
                    <div class="row">
                        <div class="col-lg-6 left-wthree-img pr-lg-4">
                            <div class="imgw3l-ab">
                                <img src="../<?php echo $row['img'] ?>" alt="" class="radius-image img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-4">
                            <div class="title-content text-left">
                                <h6 class="title-subhny"><?php echo $row['brand'] ?></h6>
                                <h3 class="title-w3l mb-4"><?php echo $row['model'] ?></h3>
                                <h5 class="title-content mb-3"><span class="fas fa-rupee-sign"></span> <?php echo $row['price'] ?>/-</h5>
                            </div>
                            <p class="pr-lg-5"><?php echo $row['suitablefor'] ?></p>

                            <hr style="border: 2px solid #731363; ">
                            <h6 class="title-subhny">Specifications </h6>
                            <hr style="border: 2px solid #731363; ">
                            <p class="pr-lg-5">Part number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['partnumber'] ?></p>
                            <p class="pr-lg-5">Operating System :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['os'] ?></p>

                            <p class="pr-lg-5">Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['type'] ?></p>
                            <p class="pr-lg-5">Graphics :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['graphics'] ?></p>
                            <p class="pr-lg-5">Graphics Memory :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['gmemory'] ?></p>
                            <p class="pr-lg-5">Color :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['color'] ?></p>
                            <p class="pr-lg-5">Processor :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['processor'] ?></p>
                            <p class="pr-lg-5">Ram :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['ram'] ?></p>
                            <p class="pr-lg-5">System Memory And Storage :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $row['hdd'] ?></p>
                            <p class="pr-lg-5">Suitable For :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;<?php echo $row['suitablefor'] ?></p>

                            <a href="../Action/AddToCart.php?id=<?php echo $row['pid'] ?>&price=<?php echo $row['price'] ?>" class="btn btn-outline-success btn-style mt-md-5 mt-4 ml-3"> Add To<span class="fa fa-cart-plus ml-2"></span></a>

                        </div>
                    </div>
                    <hr style="border: 2px solid #731363; ">
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