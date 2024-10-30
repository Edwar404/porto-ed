<?php
include 'koneksi.php';

$id = $_SESSION['id'];
$queryLoginUser = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
$rowLoginUser = mysqli_fetch_assoc($queryLoginUser);

?>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div
        class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo d-flex justify-content-center align" href="index.html"><img src="upload/images.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="upload/images.png" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img
                            class="img-xs rounded-circle"
                            src="upload/<?php echo $rowLoginUser['foto'] ?>"
                            alt="" />
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            <?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : '' ?>
                        </h5>
                        <!-- <span>Gold Member</span> -->
                    </div>
                </div>
                <a
                    href="#"
                    id="profile-dropdown"
                    data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div
                    class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div
                                class="preview-icon bg-dark rounded-circle">
                                <i
                                    class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p
                                class="preview-subject ellipsis mb-1 text-small">
                                Account settings
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div
                                class="preview-icon bg-dark rounded-circle">
                                <i
                                    class="mdi mdi-onepassword text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p
                                class="preview-subject ellipsis mb-1 text-small">
                                Change Password
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div
                                class="preview-icon bg-dark rounded-circle">
                                <i
                                    class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p
                                class="preview-subject ellipsis mb-1 text-small">
                                To-do list
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="user.php">
                            user
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="tambah-user.php">
                            Tambah User
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/error-500.html">
                            500
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/login.html">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/register.html">
                            Register
                        </a>
                    </li> -->
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Project Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="project.php">
                            Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="tambah-user.php">
                            Tambah Project
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/error-500.html">
                            500
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/login.html">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/samples/register.html">
                            Register
                        </a>
                    </li> -->
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Skills And Interest</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="tambah-skill.php">Tambah Skills</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="interest.php">Interest</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="tambah-interest.php">Tambah Interest</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                href="tambah-logo.php">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Ubah Logo</span>
            </a>
        </li>
        <!-- <li class="nav-item menu-items">
            <a
                class="nav-link"
                href="pages/tables/basic-table.html">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Icons</span>
            </a>
        </li> -->

        <!-- <li class="nav-item menu-items">
            <a
                class="nav-link"
                href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li> -->
    </ul>
</nav>