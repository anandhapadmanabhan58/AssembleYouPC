<?php
session_start();
include '../Header.php';
?>

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="search-right ml-lg-3">
            <!-- /header-top-inn-->
            <div class="menu-overlay-left">
                <div class="two-pops">
                    <!-- overlay-menuv-menu -->
                    <div class="overlay-menuv-hny">
                        <input type="checkbox" id="op"></input>
                        <div class="side-menu-hny">
                            <label for="op" class="menuopen">
                                <h6 class="side-title">Search Here <span class="fas fa-search"></span>
                            </label></h6>
                        </div>
                        <div class="overlay-menuv overlay-menuv-hugeinc">
                            <label for="op" class="menuclose"><span class="fas fa-times"></span></label>
                            <div class="side-show-content text-left">

                                <div class="quick-links-side mb-5 pt-lg-5">
                                    <h3 class="side-title">Search Here</h3>
                                    <form method="post" class="search-box">
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

                                        <button type="submit" class="btn btn-style btn-primary mt-3" name="submit">Search</button>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--overlay-menuv-menu -->
            </div>
            <!--//search-right-->
        </div>
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">
                    <div class="row mt-lg-5 mt-4 text11-content">

                        <?php
                        if (isset($_POST['submit'])) {
                            $brand = $_POST['cat'];
                            $qry = mysqli_query($conn, "SELECT * FROM `display` WHERE `brand`='$brand'");
                            if (mysqli_fetch_array($qry) > 0) {
                                $qry = mysqli_query($conn, "SELECT * FROM `display` WHERE `brand`='$brand'");

                                while ($row = mysqli_fetch_array($qry)) {
                        ?>




                                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5" style="margin-bottom: 25px">
                                        <div class="grids5-info">
                                            <a href="ViewDispById.php?id=<?php echo $row['dispid'] ?>" class="d-block zoom"><img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid news-image"></a>
                                            <div class="blog-info card-body blog-details px-lg-0">
                                                <ul class="admin-post mb-2">
                                                    <li>
                                                        <span class="fas fa-rupee-sign"></span><?php echo $row['rate'] ?>
                                                    </li>

                                                </ul>
                                                <a href="ViewDispById.php?id=<?php echo $row['dispid'] ?>" class="blog-desc"><?php echo $row['brand'] ?> <?php echo $row['display'] ?></a>

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