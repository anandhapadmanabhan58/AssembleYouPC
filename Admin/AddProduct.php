<?php
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
                            <h3 class="title-w3l text-center mb-2">Product</h3>

                            <div class="form-top" style="margin: 25px;">

                                <div class="form-top-left">
                                    <input type="text" name="model" id="w3lName" placeholder="Model" required="">
                                    <input type="text" name="partnumber" placeholder="Partnumber" required="">
                                    <input type="text" name="os" id="w3lSender" placeholder="Operating System*" required="">
                                </div>
                                <div class="form-top-left" style="margin: 25px">
                                    <input type="text" name="suitablefor" id="w3lName" placeholder="Suitable For" required="">
                                    <input type="text" name="type" id="w3lName" placeholder="Enter the Type" required="">
                                    <input type="text" name="graphics" placeholder="Graphics" required="">

                                </div>
                                <div class="form-top-left">
                                    <input type="text" name="gmemory" id="w3lName" placeholder="Graphics Memory" required="">
                                    <input type="text" name="color" placeholder="Color" required="">
                                    <input type="text" name="processor" id="w3lSender" placeholder="Processor*" required="">
                                </div>
                                <div class="form-top-left" style="margin: 25px">
                                    <input type="text" name="ram" id="w3lName" placeholder="Ram" required="">
                                    <input type="text" name="hdd" id="w3lName" placeholder="Hard Disk" required="">
                                    <input type="text" name="price" placeholder="Rate" required="">

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

                        $model = $_POST['model'];
                        $partnumber = $_POST['partnumber'];
                        $os = $_POST['os'];
                        $suitablefor = $_POST['suitablefor'];
                        $type = $_POST['type'];
                        $graphics = $_POST['graphics'];
                        $gmemory = $_POST['gmemory'];
                        $color = $_POST['color'];
                        $processor = $_POST['processor'];
                        $ram = $_POST['ram'];
                        $hdd = $_POST['hdd'];
                        $price = $_POST['price'];
                        $cat = $_POST['cat'];

                        $folder = '../images/';
                        $file = $folder . basename($_FILES['file']['name']);
                        move_uploaded_file($_FILES['file']['tmp_name'], $file);
                        $folder = 'images/';
                        $file = $folder . basename($_FILES['file']['name']);



                        $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `product` WHERE `brand`='$cat' AND `model`='$model'");
                        $fetch = mysqli_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Added")</script>';
                        } else {
                            $qry = "INSERT INTO `product`(`brand`,`model`,`partnumber`,`os`,`suitablefor`,`type`,`graphics`,`gmemory`,`color`,`processor`,`ram`,`hdd`,`price`,`img`)VALUES('$cat','$model','$partnumber','$os','$suitablefor','$type','$graphics','$gmemory','$color','$processor','$ram','$hdd','$price','$file')";

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


<?php
include '../Footer.php';
?>