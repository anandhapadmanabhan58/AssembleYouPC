<?php
include '../Dropdown.php';
?>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="AdminHome.php">Home</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="dropbtn nav-link">New</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="AddBrand.php">Brand</a>
                    <a class="nav-link" href="AddProduct.php">Product</a>
                    <a class="nav-link" href="AddRam.php">Ram</a>
                    <a class="nav-link" href="AddDisplay.php">Display</a>
                    <a class="nav-link" href="AddHardDisk.php">HDD</a>
                    <a class="nav-link" href="AddProcessor.php">Processor</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="dropbtn nav-link">Orders</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="ViewCustomisedOrder.php">Customized Orders</a>
                    <a class="nav-link" href="CustomHistory.php">Customized Order History</a>
                    <a class="nav-link" href="ViewUserOrder.php">View Orders</a>
                    <a class="nav-link" href="ViewDeliveredOrder.php">Orders History</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="ViewProduct.php">View Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewFeedback.php">Feedback</a>
        </li>

        <li class="mx-lg-3 pr-lg-3">
            <a href="../Login/Login.php" class="btn btn-style btn-primary">Sign Out <span class="fa fa-user ml-2"></span></a>
        </li>
    </ul>
</div>