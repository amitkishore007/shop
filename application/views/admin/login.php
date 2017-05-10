
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Shop Admin Login</title>
  <link rel="stylesheet" href="<?php echo  base_url('assets/css/vendor.bundle.css'); ?>">
  <link rel="stylesheet" href="<?php echo  base_url('assets/css/app.bundle.css'); ?>">
  <link rel="stylesheet" href="<?php echo  base_url('assets/css/theme-a.css'); ?>">
  <link rel="stylesheet" href="<?php echo  base_url('assets/css/style.css'); ?>">
  
</head>
<body id="auth_wrapper" >
  <div id="login_wrapper">
    <div class="logo">
      <img src="<?php echo base_url('assets/img/login.png'); ?>" alt="logo" class="logo-img">
    </div>
    <div id="login_content">
     <p class="text-center alert alert-danger error"></p>
      <h1 class="login-title">
        Sign In to your account
      </h1>
      <div class="login-body">
        <form>
          <div class="form-group label-floating is-empty">
            <label class="control-label">Email</label>
            <input type="email" class="form-control email">
          </div>
          <div class="form-group label-floating is-empty">
            <label class="control-label">Password</label>
            <input type="password" class="form-control password">
          </div>
         
          <a href="javascript:void(0)" class="btn btn-info btn-block m-t-40 login-btn">Sign In</a>
         
        </form>


      </div>
    </div>
         <div class="loader loader-red login-loader"></div>
  </div>
  <script src="<?php echo base_url('assets/js/vendor.bundle.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/app.bundle.js'); ?> "></script>
  <script type="text/javascript">
    var ajax_url = "<?php echo base_url(); ?>";
  </script>
  <script src="<?php echo base_url('assets/js/script.js'); ?> "></script>
</body>
</html>
