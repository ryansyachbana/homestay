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
                <li><a href="<?php echo base_url('tuser') ?>" style="text-decoration: none;"><strong style=" width: 10px;">  Home</strong></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=6285747505913&amp;text=Halo%20mas,%20Saya%20mau%20booking....." style="text-decoration: none;"><strong style=" width: 10px;">  Contact</strong></a></li>
                
                  <li class="dropdown">
                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;">
                      <span>
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

        <div id="heading-breadcrumbs">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <h1>Edit Profil</h1>
              </div>
              <div class="col-md-5">
                <ul class="breadcrumb">
                  <li><a href="<?php echo base_url('tuser') ?>">Home</a></li>
                  <li><a href="<?php echo base_url('akun') ?>">My Account</a></li>
                  <li>Edit Profil</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div id="content" class="clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-12 clearfix" id="customer-account">
                <!-- <p class="lead">Ubah detail personal anda atau password anda disini.</p>
                <div class="box">
                  <div class="heading text-center">
                    <h3 class="text-uppercase">Change password</h3>
                  </div>
                  <form>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group">
                          <label>Old password</label>
                          <input type="password" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group">
                          <label>New password</label>
                          <input type="password" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save new password</button>
                    </div>
                  </form>
                </div> -->
                <div class="box clearfix">
                  <div class="heading text-center">
                    <h3 class="text-uppercase">Personal details</h3>
                  </div>
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-4 col-md-offset-1 ">
                      <div class="picture-container">
                        <div class="picture">
                          <div >
                            <img src="<?php echo base_url() ?>assets/img/<?php echo $ambil_user['foto_user'] ?>" width="200"  class="img-responsive">
                          </div>
                          <input type="file" name="foto_user" id="wizard-picture" value="default-avatar.png">
                        </div>
                        <h5>Pilih Gambar</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" value="<?php echo $ambil_user['nama_user'] ?>">
                        </div>
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" value="<?php echo $ambil_user['email'] ?>">
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" value="<?php echo $ambil_user['username'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" value="<?php echo $ambil_user['password'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>No Telepon</label>
                          <input type="text" class="form-control" value="<?php echo $ambil_user['whatsapp_user'] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer id="footer">
          <div class="container">
            <div class="col-md-6 col-sm-6">
              <h4>Contact</h4>
              <p>Jl kaliurang km.15 Sleman Yogyakarta <br>
                <i class="fa fa-mobile"></i> +628974185186 <br>
                <i class="fa fa-envelope"></i> LUNNO@gmail.com <br>
              </p>
              <br><br>
              <a href="contact.html" class="btn btn-small btn-template-main"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a>
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

  </body>

  </html>