<?php
session_start();
include '../Header.php';
?>

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">

                    <form method="post" enctype="multipart/form-data">
                        <div class="form-top1">
                            <h6 class="title-subhny text-center">Add </h6>
                            <h3 class="title-w3l text-center mb-2">Display</h3>

                            <div class="form-top" style="margin: 25px;">

                                <div class="form-top-left">
                                    <input type="text" name="display" id="w3lName" placeholder="Display" required="">
                                    <input type="text" name="size" placeholder="Size" required="">
                                    <input type="text" name="resolution" id="w3lSender" placeholder="Enter the Resolution*" required="">
                                </div>
                                <div class="form-top-left" style="margin: 25px">
                                    <input type="text" name="panel" id="w3lName" placeholder="Panel" required="">
                                    <input type="text" name="speciality" id="w3lName" placeholder="Speciality" required="">
                                    <input type="text" name="rate" placeholder="Rate" required="">

                                </div>
                            </div>
                            <div class="form-top-left" style="margin-left: 50px;margin-bottom: 20px">
                                <div class="custom-select1">
                                    <select name="cat">
                                        <option>Select an option</option>
                                        <?php
                                        include '../dbconnection.php';
                                        $qry1 = "select * from brand";
                                        $res1 = mysqli_query($conn, $qry1);
                                        while ($row1 = mysqli_fetch_array($res1)) {
                                            echo "<option value='" . $row1['brand'] . "'>" . $row1['brand'] . "</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="file-upload-wrapper" data-text="Upload Your File!">
                                    <input name="file" type="file" class="file-upload-field" value="">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-style btn-primary">Submit<i class="far fa-paper-plane ml-lg-3"></i></button>
                            </div>

                        </div>

                    </form>
                    <hr style="border: 2px solid #731363; ">

                    <?php
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {

                        $display = $_POST['display'];
                        $size = $_POST['size'];
                        $resolution = $_POST['resolution'];
                        $panel = $_POST['panel'];
                        $speciality = $_POST['speciality'];
                        $rate = $_POST['rate'];
                        $cat = $_POST['cat'];

                        $folder = '../images/';
                        $file = $folder . basename($_FILES['file']['name']);
                        move_uploaded_file($_FILES['file']['tmp_name'], $file);
                        $folder = 'images/';
                        $file = $folder . basename($_FILES['file']['name']);



                        $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `display` WHERE `display`='$display' and brand='$cat'");
                        $fetch = mysqli_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Added")</script>';
                        } else {
                            $qry = "INSERT INTO `display`(`display`,`size`,`resolution`,`panel`,`speciality`,`rate`,`brand`,`img`)VALUES('$display','$size','$resolution','$panel','$speciality','$rate','$cat','$file')";

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
    </div>
</section>



<section class="w3l-news" id="news">
    <div id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-5">
                <h6 class="title-subhny"> View Display List</h6>
            </div>
            <div class="row mt-lg-5 mt-4 text11-content">



                <?php
                include '../dbconnection.php';
                $qry = mysqli_query($conn, "select * FROM `display`");
                if (mysqli_fetch_array($qry) > 0) {
                    $qry = mysqli_query($conn, "select * FROM `display`");

                    while ($row = mysqli_fetch_array($qry)) {
                ?>




                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5" style="margin-bottom: 25px">
                            <div class="grids5-info">
                                <a href="#" class="d-block zoom"><img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid news-image"></a>
                                <div class="blog-info card-body blog-details px-lg-0">
                                    <ul class="admin-post mb-2">
                                        <li>
                                            <a href="../Action/RemoveDisplay.php?id=<?php echo $row['dispid'] ?>"> <span class="fa fa-trash"></span> Remove</a>
                                        </li>

                                        <li>
                                            <span class="fas fa-rupee-sign"></span><?php echo $row['rate'] ?>
                                        </li>

                                    </ul>
                                    <ul>
                                        <li>
                                            <p><span class="fas fa-tv"> <?php echo $row['size'] ?> <?php echo $row['resolution'] ?></span></p>
                                        </li>
                                    </ul>
                                    <a href="#" class="blog-desc"><?php echo $row['brand'] ?> <?php echo $row['display'] ?></a>

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
</section>



<?php
include '../Footer.php';
?>