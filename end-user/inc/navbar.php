<?php

include '../admin-page/admin/koneksi.php';
$queryLogo = mysqli_query($koneksi, "SELECT * FROM logo");
$rowLogo = mysqli_fetch_assoc($queryLogo);

?>

<nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light w-100" style="background: #000;">
    <div class="container">
        <div>
            <a class="navbar-brand" href="#">
                <img src="../admin-page/admin/upload/<?php echo $rowLogo['foto'] ?>" style="max-width:100px">
            </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="color: #47db48;background: #47db48;">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon" style="color: #47db48;">
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav nav-right" style="font-family: 'Mochiy Pop P One', sans-serif;">
                <li class="nav-item"><a class="nav-link active" href="index.php" style="color: #47db48;">Home </a></li>
                <!-- <li class="nav-item dropdown" style="color: #47db48;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: #47db48;">Services </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="services.html" style="color: #47db48;">Price Packages</a><a class="dropdown-item" href="#" style="color: #47db48;">Order Services</a><a class="dropdown-item" href="#" style="color: #47db48;">Custom Request</a></div>
                        </li> -->
                <li class="nav-item"><a class="nav-link" href="about.php" style="color: #47db48;">About </a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="contact.php " style="color: #47db48;">Contact </a></li>
            </ul>
            <!-- <p class="ms-auto navbar-text actions" style="color: #47db48;"><a class="login" href="login.html" style="font-family: 'Mochiy Pop P One', sans-serif;color: #47db48;">Log In</a> <a class="btn btn-light action-button" role="button" href="signup.html" style="color: #47db48;border-color: #47db48;">Sign Up</a></p> -->
        </div>
    </div>
</nav>