<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title['header']?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <link rel="icon" type="image/png" href="application/views/backgroundlaundry.jpg"/>


  <link rel="icon" type="image/png" href="asset/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="asset/login/css/main.css">
</head>

<body class="hold-transition login-page" style="background-image: url('asset/login/images/bg2.jpg');">
      <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan');?>"></div>
        <div class="container-login100">
            <div class="wrap-login100 p-t-30 p-b-50">
              <div class="login-box">
                <div class="login-logo">
                  <img src="<?= base_url();?>assets/dist/img/logo2.png" alt="logo2" width="100" height="100">
                  <div><span class="login100-form-title p-b-41">WE-WASH</span></div>
              </div>

                <form class="login100-form validate-form p-b-33 p-t-5" action="<?= base_url();?>authorization/login" method="post">
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-40">
                      <div>
                        <button type="submit" class="login100-form-btn" style="margin-top: 0 !important ;">Login</button>
                      </div>
                        <div>
                        <a href="<?= base_url()?>index.php/authorization/registrasi" type="submit" class="login100-form-btn">Registrasi</a>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
      </div>
                
                    

<!-- <body class="hold-transition login-page" style="background-image: url('application/views/backgroundlaundry.jpg');">
  <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan');?>"></div>
  <div class="login-box">
    <div class="login-logo">
    <img src="<?= base_url();?>assets/dist/img/logo1.png" alt="logo1" width="150" height="150">
        <div><span class="brand-text font-weight-light"><b>WE</b>WASH</span></div>
    </div> -->
    <!-- /.login-logo -->
    <!-- <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?= base_url();?>authorization/login" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0 !important ;">Login</button>
            </div>
              <div>
              <a href="<?= base_url()?>index.php/authorization/registrasi" type="submit" class="btn btn-info btn-block">Registrasi</a>
              </div> -->
              
            <!-- /.col -->
          <!-- </div>
        </form>
      </div> -->
      <!-- /.login-card-body -->
    <!-- </div>
  </div> -->
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url();?>assets/dist/js/adminlte.min.js"></script>
  <script src="<?= base_url();?>assets/node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $(document).ready(function () {
          var data = $('.data-flush').data('flash');
          console.log(data);
          if (data) {
              var a = data.split(',');
              if (a[1].replace(/\s/g, '') == 'success') {
                  swal("Information!", a[0], "success");
              } else {
                  swal("Information!", a[0], "error");
              }
          }
      })
    })
  </script>

</body>

</html>