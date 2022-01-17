<?php
include '../Dropdown.php';
?>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="UserHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewProduct.php">Products</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="dropbtn nav-link">Custom</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="CustomProduct.php">Customize</a>
                    <a class="nav-link" href="ViewCustomisedProduct.php">My Products</a>
                    <a class="nav-link" href="ViewOrderedCustomPro.php">Ordered Custom Product</a>

                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="ViewOrders.php">My Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="AddFeedback.php">Add Feedback</a>
        </li>


        <li class="mx-lg-3 pr-lg-3">
            <a href="../Login/Login.php" class="btn btn-style btn-primary">Sign Out <span class="fa fa-user ml-2"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewCart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        </li>
    </ul>
</div>