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
                            <h3 class="title-w3l text-center mb-2">Ram</h3>

                            <div class="form-top" style="margin: 25px;">

                                <div class="form-top-left">
                                    <input type="text" name="ram" id="w3lName" placeholder="Ram" required="">
                                    <input type="text" name="size" placeholder="Size" required="">
                                    <input type="text" name="speed" id="w3lSender" placeholder="Enter the speed*" required="">
                                </div>
                                <div class="form-top-left" style="margin: 25px">
                                    <input type="text" name="speciality" id="w3lName" placeholder="Speciality" required="">
                                    <input type="text" name="rate" placeholder="Rate" required="">

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
                        $ram = $_POST['ram'];
                        $size = $_POST['size'];
                        $speed = $_POST['speed'];
                        $speciality = $_POST['speciality'];
                        $rate = $_POST['rate'];
                        $cat = $_POST['cat'];

                        $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `ram` WHERE `ram`='$ram' and brand='$cat'");
                        $fetch = mysqli_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Added")</script>';
                        } else {
                            $qry = "INSERT INTO `ram`(`ram`,`size`,`speed`,`speciality`,`rate`,`brand`)values('$ram','$size','$speed','$speciality','$rate','$cat')";

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
        $qry = mysqli_query($conn, "SELECT * FROM `ram`");
        if (mysqli_fetch_array($qry) > 0) {
        ?>


            <table id="customers">
                <tr>
                    <th>Ram</th>
                    <th>Size</th>
                    <th>Speed</th>
                    <th>Speciality</th>
                    <th>Rate</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>

                <?php
                $qry = mysqli_query($conn, "SELECT * FROM `ram`");

                while ($row = mysqli_fetch_array($qry)) {
                ?>


                    <tr>
                        <td><?php echo $row['ram'] ?></td>
                        <td><?php echo $row['size'] ?></td>
                        <td><?php echo $row['speed'] ?></td>
                        <td><?php echo $row['speciality'] ?></td>
                        <td><?php echo $row['rate'] ?></td>
                        <td><?php echo $row['brand'] ?></td>
                        <td><a href="../Action/RemoveRam.php?id=<?php echo $row['ramid'] ?>"><button type="submit" name="submit" class="btn btn-style alert-primary"><i class="fa fa-trash ml-lg-3"></i></button></a></td>
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