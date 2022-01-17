<?php
session_start();
include '../Header.php';
?>


<section class="w3l-news" id="news">
    <div id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-5">
                <h6 class="title-subhny"> View </h6>
                <h3 class="title-w3l mb-4">Cart </h3>
            </div>
            <div class="row mt-lg-5 mt-4 text11-content">

                <?php
                include '../dbconnection.php';
                $uid = $_SESSION['USERID'];
                $qry = mysqli_query($conn, "SELECT DISTINCT c.`cartid`,p.* FROM `cart` c,`product` p WHERE p.`pid`=c.`pid` AND c.`uid`='$uid' AND c.`status`='Cart'");
                if (mysqli_fetch_array($qry) > 0) {
                    $qry = mysqli_query($conn, "SELECT DISTINCT c.`cartid`,p.* FROM `cart` c,`product` p WHERE p.`pid`=c.`pid` AND c.`uid`='$uid' AND c.`status`='Cart'");

                    while ($row = mysqli_fetch_array($qry)) {
                ?>


                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5" style="margin-bottom: 25px">
                            <div class="grids5-info">
                                <a href="ViewProductById.php?id=<?php echo $row['pid'] ?>" class="d-block zoom"><img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid news-image" style="height:auto;width: auto;padding-left: 80px"></a>
                                <div class="blog-info card-body blog-details px-lg-0">
                                    <ul class="admin-post mb-2">
                                        <li>
                                            <span class="fas fa-rupee-sign"></span><?php echo $row['price'] ?>
                                        </li>
                                        <li>
                                            <a href="../Action/RemoveFromCart.php?id=<?php echo $row['cartid'] ?>"> <span class="fa fa-trash"></span> Remove</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <p><span class="fas fa-tv"> <?php echo $row['graphics'] ?> <?php echo $row['gmemory'] ?></span></p>
                                        </li>
                                    </ul>
                                    <a href="ViewProductById.php?id=<?php echo $row['pid'] ?>" class="blog-desc"><?php echo $row['brand'] ?> <?php echo $row['model'] ?></a>

                                    <p>Suitable For : <?php echo $row['suitablefor'] ?></p>
                                </div>
                            </div>
                        </div>



                    <?php
                    }
                } else {
                    ?>
                    <img src="../Nodata-pana.png" height="40%" width="40%" style=" margin-left: 350px; margin-right: auto;" />

                <?php
                }
                ?>



            </div>
        </div>
    </div>
</section>


<?php
$sel = mysqli_query($conn, "SELECT SUM(`total`) AS gtotal,`cartid` FROM `cart` WHERE `uid`='$uid' AND `status`='Cart'");
$fetch = mysqli_fetch_array($sel);
if ($fetch['gtotal'] > 0) {
?>


    <section class="w3l-contact-main w3l-contact-info py-5" id="contact">
        <div class="midd-w3 py-md-4">
            <div class="container">
                <div class="title-content text-center mb-md-5 mb-4">
                    <h6 class="title-subhny">Amount To</h6>
                    <h3 class="title-w3l mx-lg-5">Pay</h3>
                </div>
                <div class="row contact-infos">

                    <?php
                    $qry = mysqli_query($conn, "SELECT SUM(`total`) AS gtotal,`cartid` FROM `cart` WHERE `uid`='$uid' AND `status`='Cart'");
                    $finTotal = 0;
                    while ($row = mysqli_fetch_array($qry)) {
                        $finTotal = $row['gtotal'];
                    ?>

                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="single-contact-infos">
                                <div class="icon-box"> <span class="fas fa-rupee-sign"></span></div>
                                <div class="text-box">
                                    <h1 class="mb-2"><?php echo $row['gtotal'] ?></h1>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="text-box">
                                <a href="complatePayment.php?id=<?php echo $finTotal ?>" class="btn btn-outline-success btn-style mt-md-5 mt-4 ml-3"> Pay<span class="fa fa-rupee-sign ml-2"></span></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
} else {
}
?>


<?php
include '../Footer.php';
?>