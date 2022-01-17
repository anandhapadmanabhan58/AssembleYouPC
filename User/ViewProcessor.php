<?php
session_start();
include '../Header.php';
?>



<section class="w3l-about-ab pt-lg-3" id="about">
    <center>
        <h6 class="title-subhny">Processor</h6>
    </center>
    <div class="midd-w3 py-5">

        <div class="container py-lg-5 py-md-4 py-2">

            <div class="row">

                <?php
                include '../dbconnection.php';
                $brand = $_SESSION['BRAND'];
                $qry = mysqli_query($conn, "SELECT * FROM `processor` WHERE `brand`='$brand'");
                if (mysqli_fetch_array($qry) > 0) {
                ?>


                    <table id="customers">
                        <tr>
                            <th>Processor</th>
                            <th>Size</th>
                            <th>Speed</th>
                            <th>Speciality</th>
                            <th>Rate</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        $qry = mysqli_query($conn, "SELECT * FROM `processor` WHERE `brand`='$brand'");

                        while ($row = mysqli_fetch_array($qry)) {
                        ?>
                            <tr>
                                <td><?php echo $row['processor'] ?></td>
                                <td><?php echo $row['size'] ?></td>
                                <td><?php echo $row['speed'] ?></td>
                                <td><?php echo $row['speciality'] ?></td>
                                <td><?php echo $row['rate'] ?></td>
                                <td><?php echo $row['brand'] ?></td>
                                <td><a href="../Action/Cust3Pros.php?id=<?php echo $row['proid'] ?>&rate=<?php echo $row['rate'] ?>"><button type="submit" name="submit" class="btn btn-style alert-primary"><i class="fa fa-cart-plus ml-lg-3"></i></button></a></td>
                            </tr>

                        <?php
                        }
                        ?>

                    </table>
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