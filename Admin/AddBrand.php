<?php
session_start();
include '../Header.php';
?>

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">

                    <form method="post">
                        <div class="form-top1">
                            <h6 class="title-subhny text-center">Add </h6>
                            <h3 class="title-w3l text-center mb-2">Brand</h3>

                            <div class="form-top" style="margin: 25px;">

                                <div class="form-top-left">
                                    <input type="text" name="brand" id="w3lName" placeholder="Brand Name" required="">
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="submit" name="submit" class="btn btn-style btn-primary">Submit<i class="far fa-paper-plane ml-lg-3"></i></button>
                            </div>
                        </div>

                    </form>
                    <hr style="border: 2px solid #731363; ">

                    <?php
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {
                        $brand = $_POST['brand'];

                        $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `brand` WHERE `brand`='$brand'");
                        $fetch = mysqli_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Added")</script>';
                        } else {
                            $qry = "INSERT INTO `brand`(`brand`)VALUES('$brand')";

                            $exe = mysqli_query($conn, $qry);
                            if ($exe) {

                                echo '<script>alert("Added Succesfull")</script>';
                            } else {
                                echo '<script>alert("Failed to Add")</script>';
                            }
                        }
                    }
                    ?>


                </div>

            </div>

        </div>


        <?php
        $qry = mysqli_query($conn, "SELECT * FROM `brand`");
        if (mysqli_fetch_array($qry) > 0) {
        ?>


            <table id="customers" style="width: 900px; margin-left: auto; margin-right:auto">
                <tr>
                    <th>Company</th>
                    <th style="width: 200px;">Action</th>
                </tr>

                <?php
                $qry = mysqli_query($conn, "SELECT * FROM `brand`");

                while ($row = mysqli_fetch_array($qry)) {
                ?>


                    <tr>
                        <td><?php echo $row['brand'] ?></td>
                        <td style="text-align: center;"><a href="../Action/RemoveBrand.php?id=<?php echo $row['brandid'] ?>"><button type="submit" name="submit" class="btn btn-style alert-primary" title="Deletez"><i class="fa fa-trash ml-lg-3"></i></button></a></td>
                    </tr>

                <?php
                }
                ?>

            </table>
        <?php
        }
        ?>
    </div>
</section>
<!-- //contact-form -->
<?php
include '../Footer.php';
?>