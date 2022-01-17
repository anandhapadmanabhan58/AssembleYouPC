<?php
session_start();
include '../Header.php';
?>


<section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-md-5 mb-4">

        </div>
        <div class="row main-cont-wthree-2 align-items-center">


            <?php
            include '../dbconnection.php';
            $qry = mysqli_query($conn, "SELECT DISTINCT u.* FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='Delivered'");
            if (mysqli_fetch_array($qry) > 0) {
                $qry = mysqli_query($conn, "SELECT DISTINCT u.* FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='Delivered'");
                while ($row = mysqli_fetch_array($qry)) {
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4><a href="ViewCustomHistoryByUid.php?id=<?php echo $row['uid'] ?>" class="title-head mb-3"><?php echo $row['name'] ?></a></h4>
                            <p class="text-para"><?php echo $row['address'] ?></p>
                            <hr style="border: 2px solid #731363; ">
                            <a href="tel: <?php echo $row['phone'] ?>">
                                <p class="text-para"><?php echo $row['phone'] ?></p>
                            </a>

                            <a href="mailto: <?php echo $row['email'] ?>">
                                <p class="text-para"><?php echo $row['email'] ?></p>
                            </a>
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
</section>


<?php
include '../Footer.php';
?>