<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title> -->
    <title>EO YAMA</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>

<body class="layout-3">
    <script id="__bs_script__">
        //<![CDATA[
        document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>

    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar ">
                <a href="<?= site_url('landing_page/home_lp') ?>" class="navbar-brand sidebar-gone-hide" style="margin-left: 60px; margin-top: 40px;">EO YAMA</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <div class="nav-collapse navbar-nav ml-auto">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav" style="margin-right: 60px; margin-top: 40px;">
                    <li class="nav-item active"><a href="<?= site_url('landing_page/home_lp') ?>" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="<?= site_url('landing_page/about_lp') ?>" class="nav-link">About Us</a></li>
                        <li class="nav-item active"><a href="<?= site_url('landing_page/faqs_lp') ?>" class="nav-link">FAQ</a></li>
                        <!-- <li class="nav-item active"><a href="#" class="nav-link">Portofolio</a></li> -->
                        <!-- <div class="badges"> -->
                            <!-- <a href="<?= site_url('auth') ?>" class="badge badge-light">LOGIN</a> -->
                        <!-- </div> -->
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">
               
<section class="section " >
  

    <?php if (session()->getFlashdata('status')) {
        echo "<h5>" . session()->getFlashdata('status') . "</h5>";
    } ?>

    <div class="section-body " >
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <!-- ROW 1 -->
            <div class="row h-100 justify-content-center align-items-center">
               
                    <div class="col-sm-4 align-self-center">
                        <div class="card card-primary" style="width: 17rem;">
                            <img class="rounded mx-auto d-block mt-2" src="<?= base_url() ?>/template/assets/user.png" height="200px" width="200px" alt="foto">
                            <div class="card-body mx-auto">
                            <a href="<?= base_url('auth/loginPelanggan') ?>" class="btn btn-primary btn-sm ml-3">Login Pelanggan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 align-self-center">
                        <div class="card card-primary" style="width: 17rem;">
                            <img class="rounded mx-auto d-block mt-2" src="<?= base_url() ?>/template/assets/customize.png" height="200px" width="200px" alt="foto">
                            <div class="card-body mx-auto">
                            <a href="<?= base_url('auth/loginAdmin') ?>" class="btn btn-primary btn-sm ml-3">Login Admin</a>
                            </div>
                        </div>
                    </div>
               
            </div>
</section>
<div class="mt-5 text-muted text-center">
                            Belum Punya Akun? <a href= "<?= site_url('auth/register')?>" > Buat Akun </a>
                        </div>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://nauval.in/">EOYAMA</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
</body>

</html>