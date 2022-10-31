<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

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
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="index.html" class="navbar-brand sidebar-gone-hide">EO YAMA</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <div class="nav-collapse navbar-nav ml-auto">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="<?= site_url('landing_page/about_lp') ?>" class="nav-link">About Us</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">Portofolio</a></li>
                        <div class="badges">
                            <a href="<?= site_url('auth') ?>" class="badge badge-light">LOGIN</a>
                        </div>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Event</h4>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?= base_url() ?>/template/assets/img/img_lp/image1.jpeg" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Ulang Tahun Perusahaan</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url() ?>/template/assets/img/img_lp/image2.jpg" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Seminar Nasional</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url() ?>/template/assets/img/img_lp/image3.jpg" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Ulang Tahun</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Testimoni -->
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                <article class="article article-style-c">
                                    <!-- <div class="article-header">
                                        <div class="article-image" data-background="<?= base_url() ?>/template/assets/img/img_lp/image1.jpeg">
                                        </div>
                                    </div> -->
                                    <div class="article-details">
                                        <div class="article-category"><a href="#">News</a>
                                            <div class="bullet"></div> <a href="#">5 Days</a>
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-user">
                                            <img alt="image" src="<?= base_url() ?>/template/assets/img/img_lp/user.png">
                                            <div class="article-user-details">
                                                <div class="user-detail-name">
                                                    <a href="#">Hasan Basri</a>
                                                </div>
                                                <div class="text-job">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                <article class="article article-style-c">
                                    <div class="article-details">
                                        <div class="article-category"><a href="#">News</a>
                                            <div class="bullet"></div> <a href="#">5 Days</a>
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-user">
                                            <img alt="image" src="<?= base_url() ?>/template/assets/img/img_lp/user.png">
                                            <div class="article-user-details">
                                                <div class="user-detail-name">
                                                    <a href="#">Hasan Basri</a>
                                                </div>
                                                <div class="text-job">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                <article class="article article-style-c">
                                    <div class="article-details">
                                        <div class="article-category"><a href="#">News</a>
                                            <div class="bullet"></div> <a href="#">5 Days</a>
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-user">
                                            <img alt="image" src="<?= base_url() ?>/template/assets/img/img_lp/user.png">
                                            <div class="article-user-details">
                                                <div class="user-detail-name">
                                                    <a href="#">Hasan Basri</a>
                                                </div>
                                                <div class="text-job">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
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