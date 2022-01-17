<?php
session_start();
include '../Header.php';
?>

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">
                    <div class="row mt-lg-5 mt-4 text11-content">

                        <?php
                        include '../dbconnection.php';
                        $uid = $_GET['id'];
                        $qry = mysqli_query($conn, "SELECT DISTINCT u.uid,c.`cpid`,d.`brand`,d.`display`,d.`img`,d.`panel`,d.`rate`,d.`resolution`,d.`size`,d.`speciality`,h.`hdd`,h.`rate` AS hrate,h.`size` AS hsize,h.`specilaity` AS hspec,p.`processor`,p.`rate` AS prate,p.`size` AS psize,p.`speciality` AS pspec,p.`speed` AS pspeed,r.`ram`,r.`rate`AS rrate,r.`size` AS rsize,r.`speciality` AS rspec,r.`speed` AS rspeed,c.`total` FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='paid' AND u.`uid`='$uid'");
                        if (mysqli_fetch_array($qry) > 0) {
                            $qry = mysqli_query($conn, "SELECT DISTINCT u.uid,c.`cpid`,d.`brand`,d.`display`,d.`img`,d.`panel`,d.`rate`,d.`resolution`,d.`size`,d.`speciality`,h.`hdd`,h.`rate` AS hrate,h.`size` AS hsize,h.`specilaity` AS hspec,p.`processor`,p.`rate` AS prate,p.`size` AS psize,p.`speciality` AS pspec,p.`speed` AS pspeed,r.`ram`,r.`rate`AS rrate,r.`size` AS rsize,r.`speciality` AS rspec,r.`speed` AS rspeed,c.`total` FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='paid' AND u.`uid`='$uid'");

                            while ($row = mysqli_fetch_array($qry)) {
                                $_SESSION["UID"] = $row["uid"];
                        ?>




                                <div class="col-lg-4 col-md-6 mt-md-0 mt-5" style="margin-bottom: 25px">
                                    <div class="grids5-info">
                                        <a href="ViewCustomProByUidByPid.php?id=<?php echo $row['cpid'] ?>" class="d-block zoom"><img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid news-image"></a>
                                        <div class="blog-info card-body blog-details px-lg-0">
                                            <ul class="admin-post mb-2">
                                                <li>
                                                    <span class="fas fa-rupee-sign"></span><?php echo $row['total'] ?>
                                                </li>

                                            </ul>
                                            <a href="ViewCustomProByUidByPid.php?id=<?php echo $row['cpid'] ?>" class="blog-desc"><?php echo $row['brand'] ?> <?php echo $row['display'] ?></a>

                                            <p><?php echo $row['speciality'] ?></p>

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

        </div>
</section>
<!--//contact-form -->
<?php
include '../Footer.php';
?>