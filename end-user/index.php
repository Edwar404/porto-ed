<?php

include '../admin-page/admin/koneksi.php';
$queryLogo = mysqli_query($koneksi, "SELECT * FROM logo");
$rowLogo = mysqli_fetch_assoc($queryLogo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mochiy+Pop+P+One&amp;subset=japanese&amp;display=swap">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <section id="beranda">
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="beranda-content col-8">
                <h1>Welcome To My Portofolio</h1>
                <span style="color: #47db48;" class="text"></span>
                <p>
                    Maybe we're not the best, but we're dedicated to making you reach your highest potential. Through innovation, creativity, and hard work, we strive to deliver solutions that not only meet expectations but redefine them. Join us on a journey where success is reimagined, and every challenge is an opportunity to grow together. </p>

                <div class="btn-box">
                    <a
                        class="d-flex position-relative justify-content-center align-items-center h-100 w-75 bg-transparent rounded text-decoration-none z-2"
                        href="about.php">Mulai</a>
                </div>

                <div class="sosmed">
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a
                        href="https://web.facebook.com/?locale=id_ID&_rdc=1&_rdr"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            </div>
            <div class="pfp col-4">
                <img src="../admin-page/admin/upload/<?php echo $rowLogo['foto'] ?>" />
            </div>
        </div>
    </section>
    <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script
        module
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.Js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11/lib/typed.min.js"></script>

    <script src="assets/js/tulisan.js"></script>
</body>

</html>