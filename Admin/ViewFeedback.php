<?php

session_start();
include '../Header.php';
?>

<section class="w3l-clients-1 py-5" id="testimonials">
    <!-- /grids -->
    <div class="container py-lg-5 py-md-4">
        <div class="wthree-header-section text-center">
            <h5 class="title-subhny">View</h5>
            <h3 class="title-w3l mb-5 pb-lg-4">Feedbacks</h3>
        </div>
        <div class="testimonial-row">
            <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">



                <?php
                include '../dbconnection.php';
                $qry = mysqli_query($conn, "SELECT u.*,f.`feedback`,f.`dec`,f.`date` FROM `feedback` f,`user` u WHERE f.`uid`=u.`uid`");
                if (mysqli_fetch_array($qry) > 0) {
                    $qry = mysqli_query($conn, "SELECT u.*,f.`feedback`,f.`dec`,f.`date` FROM `feedback` f,`user` u WHERE f.`uid`=u.`uid`");

                    while ($row = mysqli_fetch_array($qry)) {
                ?>



                        <div class="item" style="margin-bottom: 20px">

                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo $row['dec'] ?></q>
                                    </blockquote>
                                    <h6><?php echo $row['feedback'] ?></h6>
                                    <hr style="border: 2px solid #731363; ">
                                    <h6> <?php echo $row['name'] ?></h6>
                                    <p class="indentity">Submitted On : <?php echo $row['date'] ?> </p>
                                    <div class="testi-des">




                                    </div>
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
    <!-- //grids -->
</section>


<?php

include '../Footer.php';
?>