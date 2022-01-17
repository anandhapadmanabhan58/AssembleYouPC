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
                            <h6 class="title-subhny text-center">Give Your </h6>
                            <h3 class="title-w3l text-center mb-2">Feedback</h3>

                            <div class="form-top-righ">


                                <div class="form-top-righ">
                                    <input type="text" name="feed" id="w3lName" placeholder="Feedback" required="">
                                </div>

                                <div class="form-top-righ">
                                    <textarea name="dec" id="w3lMessage" placeholder="Description*" required=""></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-style btn-primary">Send Now <i class="far fa-paper-plane ml-lg-3"></i></button>
                            </div>
                        </div>
                    </form>


                    <?php
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {
                        //                            
                        $feedback = $_POST['feed'];
                        $dec = $_POST['dec'];
                        $uid = $_SESSION['USERID'];
                        $date = date('y/m/d');
                        $qry = "INSERT INTO `feedback`(`uid`,`feedback`,`dec`,`date`)VALUES('$uid','$feedback','$dec','$date')";

                        $exe = mysqli_query($conn, $qry);
                        if ($exe) {

                            echo '<script>alert("Feedbck Send Succesfull")</script>';
                        } else {
                            echo '<script>alert("Failed to Register")</script>';
                        }
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact-form -->
<?php
include '../Footer.php';
?>