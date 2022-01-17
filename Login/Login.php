<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>BuildComp | Assemble Your Pc | Home :: Lcc</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="icon" href="../logo.png">
</head>

<body>
    <div class="signinform">
        <h1>Login Form</h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2 style="margin-left:40%;">Login</h2>
                    <form action="#" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Username or Email" required="" name="uname">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="" name="psw">
                        </div>

                        <button class="btn btn-primary btn-block" type="submit" name="submit">Sign In</button>
                    </form>




                    <?php
                    session_start();
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {
                        $uname = $_POST['uname'];
                        $psw = $_POST['psw'];
                        $qry = "SELECT * FROM `login` WHERE `uname`='$uname' AND `psw` ='$psw'";
                        $check = mysqli_query($conn, $qry);
                        if (mysqli_num_rows($check) == 0) {
                            echo "<script>alert('Invalid Username or password');</script>";
                        } else {
                            $row = mysqli_fetch_assoc($check);
                            $_SESSION["USERID"] = $row["uid"];
                            if ($row["type"] == "Admin") {
                                echo "<script>alert('Welcome Admin');</script>";
                                echo "<script>window.location='../Admin/AdminHome.php'</script>";
                            } elseif ($row["type"] == "User") {
                                echo "<script>alert('Log in Successful');</script>";
                                echo "<script>window.location='../User/UserHome.php'</script>";
                            } else {
                                echo "<script>alert('Please check Your User name and Password');</script>";
                            }
                        }
                    }
                    ?>


                    <p class="continue"><span> or </span></p>

                    <p class="account">Don't have an account? <a href="../UserReg.php">Sign up</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>© 2021 BuildComp. All rights reserved | Designed by <a href="http://www.lcckochi.com/" target="blank">Lcc</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>