<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LUNNO</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.turquoise.css') ?>" rel="stylesheet" id="theme-stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/img/apple-touch-icon-57x57.png') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/apple-touch-icon-72x72.png') ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-touch-icon-76x76.png') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/apple-touch-icon-114x114.png') ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/apple-touch-icon-120x120.png') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/img/apple-touch-icon-144x144.png') ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/apple-touch-icon-152x152.png') ?>" />

    <link href="<?php echo base_url('assets/css/owl.carousel.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.theme.css') ?>" rel="stylesheet">
</head>

<body>
    <div id="all">
        <header>
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 contact">
                            <p class="hidden-sm"><a href="https://api.whatsapp.com/send?phone=6285747505913&amp;text=Halo%20mas,%20Saya%20mau%20booking....." data-animate-hover="pulse"><i class="fa fa-phone"> </i></a> Contact us on +628 974 185 186</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
            <div class="navbar navbar-default yamm" role="navigation" id="navbar"  style="background-color: #16a085;">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand home" href="#home"
                        style=" font-size: 40px;  line-height: 40px;"><strong>LUNNO</strong>  
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" style="text-decoration: none;"><strong style=" width: 10px;">  Home</strong></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=6285747505913&amp;text=Halo%20mas,%20Saya%20mau%20booking....." style="text-decoration: none;"><strong style=" width: 10px;">  Contact</strong></a></li>

                        <?php if ($cek=="terdaftar"): ?>
                            <li><a href="<?php echo base_url('lowner') ?>" style="text-decoration: none;"><strong style=" width: 10px;">  Masukkan Homestay Anda</strong></a></li>
                            <?php else: ?>

                                <li><a href="<?php echo base_url('downer') ?>" style="text-decoration: none;"><strong style=" width: 10px;">  Masukkan Homestay Anda</strong></a></li>
                            <?php endif ?>


                            <li class="dropdown">
                                <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;">
                                    <span >
                                        <img src="<?php echo base_url('assets/img/').$_SESSION['user']['foto_user'] ?>" width="30px" height="21px" class="img-circle">
                                    </span> <?php echo $_SESSION['user']['nama_user'] ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('akun') ?>">My Account</a></li>
                                        <li><a href="<?php echo base_url('tuser/logout') ?>">Log out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="no-mb">
           <div class="jumbotron" style="width: 100%; height: 600px; background: url('assets/img/tampilan_borobudur.jpg'); background-size: cover;">
            <div class="container"  data-animate="fadeInUp">
                <div class="row mb-small">
                    <div class="col-sm-12 text-center">
                        <br><br><br><br><br><h1>Selamat Datang, <?php echo $_SESSION['user']['nama_user'] ?>!</h1>
                        <h2>cari penginapan tanpa harus takut jauh dengan destinasi tujuan.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-small">
                        <img class="img-responsive" src="img/template-mac.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Backpacker Homestay</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <p class="text-muted lead text-center"></p>
            <div class="row products"  data-animate="fadeInUp">
                <ul class="owl-carousel testimonials same-height-row">    
                    <?php foreach ($homestay as $key => $value): ?>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="product">
                                    <div class="image">
                                        <a href="<?php echo base_url('bhome/detail') ?>/<?php echo $value['id_homestay'] ?>">
                                            <img src="<?php echo base_url('assets/img/').$value['foto_homestay'] ?>" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#"><?php echo $value['nama_homestay'] ?></a></h3>
                                        <p class="price">Rp <?php echo $value['harga_homestay'] ?></p>

                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
                <p class="text-center">
                    <a href="<?php echo base_url('bhome') ?>" class="btn btn-lg btn-template-main">View All</a>
                </p><br><br><br><br>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading">
                            <h2>Destinasi Wisata</h2>
                        </div>
                        <p class="lead">Pesan penginapan anda tanpa bingung harus jauh dengan destinasi pilihan anda.</p>
                    </div>
                </div>
                <div class="row portfolio"  data-animate="fadeInUp">
                    <?php foreach ($destinasi as $key => $value): ?>    
                        <div class="col-sm-4 col-xs-6">
                            <div class="box-image">
                                <div class="image">
                                    <img src="<?php echo base_url('assets/img/').$value['foto_destinasi'] ?>" width="100%" class="img-responsive">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3><a href="<?php echo base_url('destinasi') ?>/homestay/<?php echo $value['id_destinasi_wisata'] ?>"><?php echo $value['nama_destinasi'] ?></a></h3> 
                                </div>
                                <div class="text">
                                    <p class="buttons"><br>
                                        <a href="<?php echo base_url('destinasi') ?>/homestay/<?php echo $value['id_destinasi_wisata'] ?>" class="btn btn-template-transparent-primary">View</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </div>

    <section class="bar background-image-fixed-2 no-mb color-white text-center">
        <div class="dark-mask"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="icon icon-lg"><i class="fa fa-globe"></i>
                    </div>
                    <h3 class="text-uppercase">Tanyakan pada kami?</h3>
                    <p class="lead">Masih bingung? Kami siap melayani anda kapanpun.</p>
                    <p class="text-center">
                        <a href="https://api.whatsapp.com/send?phone=6285747505913&amp;text=Halo%20mas,%20Saya%20mau%20booking....." class="btn btn-template-transparent-black btn-lg"><span class="glyphicon glyphicon-earphone"></span> Contact</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="col-md-6 col-sm-6">
                <h4>Contact</h4>
                <p>Jl kaliurang km.15 Sleman Yogyakarta <br>
                    <i class="fa fa-mobile"></i> +628974185186 <br>
                    <i class="fa fa-envelope"></i> LUNNO@gmail.com <br>
                </p>
                <br><br>
                <a href="https://api.whatsapp.com/send?phone=6285747505913&amp;text=Halo%20mas,%20Saya%20mau%20booking....." class="btn btn-small btn-template-main"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in.</p>
                <hr>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
        </div>
    </footer>
    <div id="copyright">
        <div class="container">
            <div class="col-md-12">
                <p class="pull-left">Copyright <strong>LUNNO</strong> 2019. All Right Reserved</p>
            </p>
        </div>
    </div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets/js/jquery.cookie.js') ?>"></script>
<script src="<?php echo base_url('assets/js/waypoints.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.counterup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.parallax-1.1.3.js') ?>"></script>
<script src="<?php echo base_url('assets/js/front.js') ?>"></script>

<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>

<script>
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 1000, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});
});
</script>

</body>

</html>