<?php
include './Header.php';
?>

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">
                    <form method="post">
                        <div class="form-top1">
                            <h6 class="title-subhny text-center">User </h6>
                            <h3 class="title-w3l text-center mb-2">Registration</h3>

                            <div class="form-top">
                                <div class="form-top-left">
                                    <input type="text" name="name" id="w3lName" placeholder="Name" required="">
                                    <input type="text" name="phone" placeholder="Your phone number" required="" pattern="[6789][0-9]{9}">
                                    <input type="email" name="email" id="w3lSender" placeholder="Email*" required="">

                                </div>
                                <div class="form-top-left" style="margin-top: 40px">

                                    <label class="container1">Male
                                        <input type="radio" checked="checked" name="gender" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container1">Female
                                        <input type="radio" name="gender" value="female">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>

                                <div class="form-top-righ">
                                    <input type="password" name="psw" id="w3lName" placeholder="Password" required="">
                                </div>

                                <div class="form-top-righ">
                                    <textarea name="address" id="w3lMessage" placeholder="Address*" required=""></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-style btn-primary">Submit Now <i class="far fa-user ml-lg-3"></i></button>
                            </div>
                        </div>
                    </form>


                    <?php
                    include './dbconnection.php';
                    if (isset($_POST['submit'])) {
                        //                            
                        $name = $_POST['name'];
                        $gender = $_POST['gender'];
                        $number = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $psw = $_POST['psw'];

                        $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `user` WHERE `phone`='$number' AND `email`='$email'");
                        $fetch = mysqli_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Registered")</script>';
                        } else {
                            $qry = "INSERT INTO `user`(`name`,`gender`,`address`,`phone`,`email`)VALUES('$name','$gender','$address','$number','$email')";

                            $exe = mysqli_query($conn, $qry);
                            if ($exe) {
                                $qry2 = mysqli_query($conn, "INSERT INTO `login`(`uid`,`uname`,`psw`,`type`)VALUES((SELECT MAX(`uid`) FROM `user`),'$email','$psw','User')");

                                echo '<script>alert("Registration Succesfull")</script>';
                            } else {
                                echo '<script>alert("Failed to Register")</script>';
                            }
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
include './Footer.php';
?>