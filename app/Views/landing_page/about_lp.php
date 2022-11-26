<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title> -->
    <title>EOYAMA</title>
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
                        <div class="badges">
                            <a href="<?= site_url('auth') ?>" class="badge badge-light">LOGIN</a>
                        </div>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>About Us</h1>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">EO YAMA</h2>
                        <div class="card">
                            <div class="card-body">
                                <p>EO YAMA adalah sebuah perusahaan yang bergerak di bidang
                                    event organizer dan event planner. EO YAMA membantu Anda membuat acara yang menyenangkan dan tak
                                    terlupakan, sepak terjang kami sebagai jasa Event Organizer
                                    Online dan Offline profesional selalu memberikan kepuasan
                                    terhadap pelanggan untuk menciptakan suasana acara yang tidak
                                    terlupakan dan pastinya mengesankan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="pb-2 mb-4 text-danger border-bottom border-black-50"></div>
                    <h2 class="section-title">VISI</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <img src="<?= base_url() ?>/template/assets/img/img_about/creative.png" alt="Creative" width="50dp" height="50dp"></a>
                                <b>
                                    <p>Creative Thinking</p>
                                </b>
                                <p>Kreatifitas adalah nyawa tim event organizer (EO) kami dalam bekerja untuk menghasilkan acara yang unik dan menarik.</p>
                            </div>
                            <div class="col text-center">
                                <img src="<?= base_url() ?>/template/assets/img/img_about/teamwork.png" alt="Teamwork" width="50dp" height="50dp"></a>
                                <b>
                                    <p>Solid Teamwork</p>
                                </b>
                                <p>Tim yang sold dan kompak siap membantu melancarkan acara bazaar, outbound, dan acara Anda lainnya.</p>
                            </div>
                            <div class="col text-center">
                                <img src="<?= base_url() ?>/template/assets/img/img_about/fun.png" alt="Fun" width="50dp" height="50dp"></a>
                                <b>
                                    <p>Fun</p>
                                </b>
                                <p>Membawa kesenangan dalam acara anda</p>
                            </div>
                            <div class="col text-center">
                                <img src="<?= base_url() ?>/template/assets/img/img_about/trust.png" alt="Reliable" width="50dp" height="50dp"></a>
                                <b>
                                    <p>Reliable</p>
                                </b>
                                <p>Partner yang dapat anda andalkan dalam acara anda</p>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="pb-2 mb-4 text-danger border-bottom border-black-50"></div>

                        <div class="section-body">
                            <div class="card">
                                <div class="card-header">
                                    <h4>OUT TEAM</h4>
                                </div>
                                <div class="container">
                                    <div class="col">
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="col text-center">
                                                    <img src="<?= base_url() ?>/template/assets/img/img_about/yulia.png" alt="yulia" width="140dp" height="140dp" class="rounded-circle"></a>
                                                    <b>
                                                        <p>Yulia Dwi Putri</p>
                                                    </b>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col text-center">
                                                    <img src="<?= base_url() ?>/template/assets/img/img_about/ages.png" alt="ages" width="140dp" height="140dp" class="rounded-circle"></a>
                                                    <b>
                                                        <p>Ages Mahesa</p>
                                                    </b>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col text-center">
                                                    <img src="<?= base_url() ?>/template/assets/img/img_about/melan.png" alt="melan" width="140dp" height="140dp" class="rounded-circle"></a>
                                                    <b>
                                                        <p>Melan Caniadi</p>
                                                    </b>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col text-center">
                                                    <img src="<?= base_url() ?>/template/assets/img/img_about/aura..png" alt="aura" width="140dp" height="140dp" class="rounded-circle"></a>
                                                    <b>
                                                        <p>Aura Husnaini P.Z</p>
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col">
                        <div class="row">
                            <div class="card-body">
                                <div class="col text-center">
                                    <img src="<?= base_url() ?>/template/assets/img/img_about/melan.png" alt="melan" width="140dp" height="140dp" class="rounded-circle"></a>
                                    <b>
                                        <p>Melan Caniadi</p>
                                    </b>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col text-center">
                                    <img src="<?= base_url() ?>/template/assets/img/img_about/aura..png" alt="aura" width="140dp" height="140dp" class="rounded-circle"></a>
                                    <b>
                                        <p>Aura Husnaini P.Z</p>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="">YAMA</a>
                    </div>
                    <div class="footer-right">
                        v1.0
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