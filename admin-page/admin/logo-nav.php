<?php
session_start();
include 'koneksi.php';

$queryLogo = mysqli_query($koneksi, "SELECT * FROM logo_nav");

if (isset($_GET['delete'])) {
    $id = $_GET['delete']; //mengambil nilai params

    // query / perintah hapus
    $delete = mysqli_query($koneksi, "DELETE FROM logo_nav  WHERE id ='$id'");
    header("location:logo-nav.php?hapus=berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <?php include 'inc/head.php' ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php include 'inc/sidebar.php' ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include 'inc/navbar.php' ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">Data Skills</div>
                                <div class="card-body">
                                    <?php if (isset($_GET['hapus'])): ?>
                                        <div class="alert alert-success" role="alert">
                                            Data berhasil dihapus
                                        </div>
                                    <?php endif ?>
                                    <div align="right" class="mb-3">
                                        <a href="tambah-logo-nav.php" class="btn btn-primary">Tambah</a>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>logo</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            while ($rowLogo = mysqli_fetch_assoc($queryLogo)) { ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $rowLogo['foto'] ?></td>
                                                    <td>
                                                        <a href="tambah-logo-nav.php?edit=<?php echo $rowLogo['id'] ?>" class="btn btn-success btn-md">
                                                            <span class="mdi mdi-lead-pencil"></span>
                                                        </a>
                                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini??')"
                                                            href="logo-nav.php?delete=<?php echo $rowLogo['id'] ?>" class="btn btn-danger btn-md">
                                                            <span class="mdi mdi-delete-sweep"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include 'inc/footer.php' ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include 'inc/script.php' ?>
</body>

</html>