<?php
session_start();
include '../Header.php';
?>


<?php
include '../dbconnection.php';
$id = $_GET['id'];
$uid = $_SESSION['UID'];
$qry = mysqli_query($conn, "SELECT DISTINCT c.`status`,c.`cpid`,d.`brand`,d.`display`,d.`img`,d.`panel`,d.`rate`,d.`resolution`,d.`size`,d.`speciality`,h.`hdd`,h.`rate` AS hrate,h.`size` AS hsize,h.`specilaity` AS hspec,p.`processor`,p.`rate` AS prate,p.`size` AS psize,p.`speciality` AS pspec,p.`speed` AS pspeed,r.`ram`,r.`rate`AS rrate,r.`size` AS rsize,r.`speciality` AS rspec,r.`speed` AS rspeed,c.`total` FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='Delivered' AND u.`uid`='$uid' AND c.`cpid`='$id'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT DISTINCT c.`status`,c.`cpid`,d.`brand`,d.`display`,d.`img`,d.`panel`,d.`rate`,d.`resolution`,d.`size`,d.`speciality`,h.`hdd`,h.`rate` AS hrate,h.`size` AS hsize,h.`specilaity` AS hspec,p.`processor`,p.`rate` AS prate,p.`size` AS psize,p.`speciality` AS pspec,p.`speed` AS pspeed,r.`ram`,r.`rate`AS rrate,r.`size` AS rsize,r.`speciality` AS rspec,r.`speed` AS rspeed,c.`total` FROM `cproduct` c,`display` d,`hdd` h,`processor` p,`ram` r,`user` u WHERE u.`uid`=c.`uid` AND c.`dispid`=d.`dispid` AND c.`hddid`=h.`hddid` AND c.`proid`=p.`proid` AND c.`ramid`=r.`ramid` AND c.`status`='Delivered' AND u.`uid`='$uid' AND c.`cpid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
        $_SESSION["CPID"] = $row["cpid"];
?>
        <section class="w3l-about-ab pt-lg-3" id="about">
            <div class="midd-w3 py-5">
                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="row">
                        <div class="col-lg-6 left-wthree-img pr-lg-4">
                            <div class="imgw3l-ab">
                                <img src="../<?php echo $row['img'] ?>" alt="" class="radius-image img-fluid">
                                &nbsp;
                                <hr style="border: 2px solid #731363; ">
                                <h6 class="title-content">Processor : </h6>
                                <hr style="border: 2px solid #731363; ">

                                <p class="pr-lg-5">Processor : <?php echo $row['processor'] ?></p>
                                <p class="pr-lg-5">Size : <?php echo $row['psize'] ?></p>
                                <p class="pr-lg-5">Speed : <?php echo $row['pspeed'] ?></p>
                                <p class="pr-lg-5">Specifications : <?php echo $row['pspec'] ?></p>

                                <hr style="border: 2px solid #731363; ">
                                <h6 class="title-content">Ram : </h6>
                                <hr style="border: 2px solid #731363; ">

                                <p class="pr-lg-5">Ram : <?php echo $row['ram'] ?></p>
                                <p class="pr-lg-5">Size : <?php echo $row['rsize'] ?></p>
                                <p class="pr-lg-5">Speed : <?php echo $row['rspeed'] ?></p>
                                <p class="pr-lg-5">Specifications : <?php echo $row['rspec'] ?></p>
                            </div>
                        </div>

                        <!--                    Top Section    
                        -->
                        <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-4">
                            <div class="title-content text-left">
                                <h6 class="title-subhny"><?php echo $row['brand'] ?></h6>
                                <h3 class="title-w3l mb-4"><?php echo $row['display'] ?></h3>
                                <h3 class="title-w3l mb-4"><span class="fas fa-rupee-sign"></span> <?php echo $row['total'] ?></h3>
                            </div>
                            <hr style="border: 2px solid #731363; ">
                            <h6 class="title-content">Display : </h6>
                            <hr style="border: 2px solid #731363; ">
                            <p class="pr-lg-5">Screen Size : <?php echo $row['size'] ?></p>
                            <p class="pr-lg-5">Resolution : <?php echo $row['resolution'] ?></p>
                            <p class="pr-lg-5">Panel : <?php echo $row['panel'] ?></p>
                            <p class="pr-lg-5">Speciality : <?php echo $row['speciality'] ?></p>
                            <hr style="border: 2px solid #731363; ">
                            <h6 class="title-content">Hard Disk : </h6>
                            <hr style="border: 2px solid #731363; ">
                            <p class="pr-lg-5">Hard Disk : <?php echo $row['hdd'] ?></p>
                            <p class="pr-lg-5">Size : <?php echo $row['hsize'] ?></p>
                            <p class="pr-lg-5">Specifications : <?php echo $row['hspec'] ?></p>
                            <hr style="border: 2px solid #731363; ">
                            <h6 class="title-content">Order Status : <?php echo $row['status'] ?></h6>
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