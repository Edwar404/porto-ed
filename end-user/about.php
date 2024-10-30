<?php

include '../admin-page/admin/koneksi.php';

$queryInterest = mysqli_query($koneksi, "SELECT * FROM interest");
$queryProject = mysqli_query($koneksi, "SELECT * FROM project");
$querySkills = mysqli_query($koneksi, "SELECT * FROM skills");

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>portofolio</title>
    <?php include 'inc/head.php' ?>
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mochiy+Pop+P+One&amp;subset=japanese&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&amp;display=swap">
    <link rel="stylesheet" href="assets/css/F19537---MySkills.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-icons.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-Horizontal-images.css">
    <link rel="stylesheet" href="assets/css/responsive-blog-card-slider.css">
    <link rel="stylesheet" href="assets/css/Responsive-Image-Grid.css">
    <link rel="stylesheet" href="assets/css/Skill-Item-skill.css">
    <link rel="stylesheet" href="assets/css/Skill-Item.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css"> -->
    <link rel="stylesheet" href="content/assets/css/style.css">
</head>

<body>
    <div class="wrapper overflow-hidden">
        <!-- NAVBAR -->
        <?php include 'inc/navbar.php' ?>
        <section class="py-5" style="background: #000000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="justify-content-center align-items-center">

                            <h1 class="pt-3" style="text-align: center;font-family: 'Mochiy Pop P One', sans-serif;color: #47db48;">About Me</h1>
                            <p style="text-align: center;color: #47db48;font-family: 'Mochiy Pop P One', sans-serif;">
                                <span class="" style="color: rgb(250, 250, 250); background-color: rgb(0, 0, 0);">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4" style="background: #292929;">
            <div class="container">
                <div class="d-flex justify-content-start">
                    <a class="text-decoration-none me-3" style="color: aliceblue;" href="index.php">Home</a>
                    <span class="me-3">/</span>
                    <p>About</p>
                </div>
            </div>
        </section>
        <section class="py-5" style="background: #000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 d-flex justify-content-center" style="height:500px;"><img width="" class="object-fit-cover" src="assets/img/sherlock2.png"></div>
                    <div class="col-md-7">
                        <h1 class="pb-2" style="color: #47db48;">I'm Edwar Ibrahim</h1>
                        <p class="py-2"><em><span style="color: rgb(250, 250, 250);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></em></p>
                        <div class="row py-2">
                            <?php while ($rowSkills = mysqli_fetch_assoc($querySkills)) : ?>
                                <div class="col-4 card m-2" style="border-color:#47db48; background:#4a4646;">
                                    <p><?php echo $rowSkills['nama_skill'] ?></p>
                                </div>
                            <?php endwhile ?>
                        </div>

                        <!-- <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div> -->
                        <p class="py-3"><span style="color: rgb(250, 250, 250);">Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" style="background: #292929">
            <div class="container">
                <h2 style="color: #47db48;">My Skills</h2>
                <p>HTML</p>
                <div class="skills-container">
                    <div class="skills html"><span>90%</span></div>
                </div>
                <p>CSS</p>
                <div class="skills-container">
                    <div class="skills css"><span>80%</span></div>
                </div>
                <p>JavaScript</p>
                <div class="skills-container">
                    <div class="skills js"><span>65%</span></div>
                </div>
                <p>PHP</p>
                <div class="skills-container">
                    <div class="skills php"><span>60%</span></div>
                </div>
            </div>
        </section>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 style="color: #47db48;" class="mb-5">My Project</h1>
                </div>
                <div class="row g-4">
                    <?php while ($rowProject = mysqli_fetch_assoc(result: $queryProject)): ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="../admin-page/admin/upload/<?php echo $rowProject['foto'] ?>" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div style="background:#6e6e6e;" class="d-flex justify-content-center pt-2 px-1">
                                        <!-- <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                                        <div class="text-center p-4">
                                            <h5 class="mb-0"><?php echo $rowProject['keterangan'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>


                </div>
            </div>
        </div>
        <section class="photo-gallery py-4 py-5" style="background: #000;">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6">
                        <h2 style="color: #47db48;">I'm Interested In</h2>
                    </div>
                </div>
                <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="" style="color: #47db48;">
                    <?php while ($rowInterst = mysqli_fetch_assoc($queryInterest)) : ?>
                        <div class="col item">
                            <div class="d-flex justify-content-center align-items-center rounded p-xl-2" style="background-color:#292929;">
                                <p><?php echo $rowInterst['nama_interest'] ?></p>
                            </div>
                        </div>
                    <?php endwhile ?>

                </div>
            </div>
        </section>
        <!-- <section class="py-5" style="background: #292929;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="color: #47db48;">Personal</h1>
                    <p style="color: #47db48;"><em>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</em></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 justify-content-center d-flex align-items-center"><span style="background: #47db48;">facebook</span><span style="background: #47db48;">Instagram</span><span style="background: #47db48;">TextLinkedIn</span><span style="background: #47db48;">Whatsapp</span></div>
            </div> 
        </section> -->

        <!-- FOOTER -->
        <?php include 'inc/footer.php' ?>

    </div>
    <?php include 'inc/script.php' ?>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/responsive-blog-card-slider-01-swiper-bundle.min.js"></script>
    <script src="assets/js/responsive-blog-card-slider-02-responsive-blog-card-slider.js"></script>
    <script src="assets/js/Skill-Item-skill.js"></script>
    <script src="assets/js/Skill-Item-wow.js"></script> -->
</body>

</html>