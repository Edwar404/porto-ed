<?php
session_start();
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($koneksi, "INSERT INTO user (nama, email, password, foto)
            VALUES ('$nama','$email','$password','$nama_foto')");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO user (nama, email, password)
            VALUES ('$nama','$email','$password')");
    }

    header("location:user.php?tambah=berhasil");
}

$id  = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($koneksi, "SELECT * FROM user WHERE id ='$id'");
$rowEdit   = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];

    // jika password di isi sama user
    if ($_POST['passsword']) {
        $password = $_POST['password'];
    } else {
        $password = $rowEdit['password'];
    }

    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
            $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama', 
            email='$email', password ='$password', foto='$nama_foto' WHERE id='$id'");
        }
    } else {
        $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama', 
            email='$email', password ='$password' WHERE id='$id'");
    }


    header("location:user.php?ubah=berhasil");
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
    <?php include 'inc/head.php'?>

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
                                <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> User</div>
                                <div class="card-body">
                                    <?php if (isset($_GET['hapus'])): ?>
                                        <div class="alert alert-success" role="alert">
                                            Data berhasil dihapus
                                        </div>
                                    <?php endif ?>

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="" class="form-label">Nama</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="nama"
                                                    placeholder="Masukkan nama anda"
                                                    required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['nama'] : '' ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control"
                                                    name="email"
                                                    placeholder="Masukkan email anda"
                                                    required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <label for="" class="form-label">Password</label>
                                                <input type="password"
                                                    name="password"
                                                    placeholder="Masukkan password anda"
                                                    class="form-control"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <label for="" class="form-label">Foto</label>
                                                <input type="file"
                                                    name="foto">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
    <?php include 'inc/script.php'?>
</body>

</html>