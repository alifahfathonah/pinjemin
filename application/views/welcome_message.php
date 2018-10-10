<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kita Bantu</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url()?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b>Kita Bantu</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#home" class="smothscroll">Halaman Utama</a></li>
          <li><a href="#desc" class="smothscroll">Tentang Kami</a></li>
          <!-- <li><a href="#showcase" class="smothscroll">Showcase</a></li> -->
          <li><a href="#contact" class="smothscroll">Daftar Sekarang</a></li>
          <li><a href="<?=base_url()?>welcome/login">Login</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1><b>Kita Bantu</b></h1>
            <h3><i>"Membantu memberikan solusi keuangan"</i></h3>
            <br>
          </div>

          <div class="col-lg-2">
            <h5>Masalah?</h5>
            <p>Ceritakan pada kami, masalah keuangan yang anda hadapi</p>
            <img class="hidden-xs hidden-sm hidden-md" src="<?=base_url()?>assets/img/arrow1.png">
          </div>
          <div class="col-lg-8">
            <img class="img-responsive"  src="<?=base_url()?>assets/home.png" alt="">
          </div>
          <div class="col-lg-2">
            <br>
            <img class="hidden-xs hidden-sm hidden-md" src="<?=base_url()?>assets/img/arrow2.png">
            <h5>Solusi!</h5>
            <p>Kami akan memberikan solusi terbaik untuk masalah keuangan yang anda hadapi.</p>
          </div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  <section id="desc" name="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
          <h1>Cara Kerja</h1>
          <br>
          <br>
          <div class="col-lg-4">
            <img src="<?=base_url()?>assets/img/intro01.png" alt="">
            <h3>1. Daftar</h3>
            <p>Sampaikan permasalahan keuangan anda, daftar kan diri anda dengan mengisi biodata diri.</p>
          </div>
          <div class="col-lg-4">
            <img src="<?=base_url()?>assets/img/intro02.png" alt="">
            <h3>2. Validasi Data</h3>
            <p>Petugas kami akan memvalidasi dan memverifikasi data anda .</p>
          </div>
          <div class="col-lg-4">
            <img src="<?=base_url()?>assets/img/intro03.png" alt="">
            <h3>3. Pinjaman</h3>
            <p>Kami akan memberikan pinjaman sesuai nominal yang disepakati dan disetujui.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
      <div class="container">
        <div class="row">
          <h1 class="centered">Tentang Kami?</h1>
          <br>
          <br>
          <div class="col-lg-6 centered">
            <img class="centered" class="img-responsive" src="<?=base_url()?>assets/hand_money.png" alt="">
          </div>

          <div class="col-lg-6">
            <h3>Kita Bantu</h3>
            <br>
            <!-- ACCORDION -->
            <div class="accordion ac" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
  		                        First Class Design
  		                        </a>
                </div>
                <!-- /accordion-heading -->
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Retina Ready Theme</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Awesome Support</a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">Responsive Design</a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>
            </div>
            <!-- Accordion -->
          </div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #features -->
  </section>





  <section id="contact" name="contact">
    <div id="footerwrap">
      <div class="container">
        <div class="col-lg-5">
          <h3>Alamat</h3>
          <p>
            Av. Greenville 987,<br/> New York,<br/> 90873
            <br/> United States
          </p>
        </div>

        <div class="col-lg-7">
          <h3>Daftar Sekarang</h3>

          <br>
          <form class="contact-form php-mail-form" role="form" action="<?=base_url()?>welcome/daftar" method="POST">

            <div class="form-group">
              <label for="contact-name">NIK</label>
              <input type="name" name="nik" class="form-control" id="contact-name" placeholder="NIK" data-rule="minlen:5" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Nama</label>
              <input type="text" name="nama" class="form-control" id="contact-email" placeholder="nama" data-rule="minlen:5" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" id="contact-subject" placeholder="Tempat Lahir" data-rule="minlen:5" data-msg="Please enter at least 8 chars of subject" required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="contact-subject" placeholder="Tempat Lahir" data-rule="minlen:5" data-msg="Please enter at least 8 chars of subject" required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Jenis Kelamin</label>
              <select name="jk" class="form-control" id="contact-subject" placeholder="Tempat Lahir" required>
                <option value="">--pilih--</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Email</label>
              <input type="email" name="email" class="form-control" id="contact-subject"  required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Nomor HP</label>
              <input type="number" name="nomor_hp" class="form-control" id="contact-subject" placeholder="Tempat Lahir" data-rule="minlen:5" data-msg="Please enter at least 8 chars of subject" required>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-message">Alamat</label>
              <textarea class="form-control" name="alamat" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us" required></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"><img src="<?=base_url()?>assets/lib/php-mail-form/loading.gif"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Proses</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Kita Bantu</strong>. All Rights Reserved 
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Kita Bantu template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="<?=base_url()?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/lib/php-mail-form/validate.js"></script>
  <script src="<?=base_url()?>assets/lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>assets/js/main.js"></script>

</body>
</html>
