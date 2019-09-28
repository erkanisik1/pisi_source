<!DOCTYPE html>
<html>
<head>
  <title>Developer - Pisi Linux</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>develop/css/login.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="/upload/pisilinux_pisi.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form method="post">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="email" class="form-control input_user" value="" placeholder="Email adresinizi girin...">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline" name="remember" value="1">
                <label class="custom-control-label" for="customControlInline">Beni Hatırla</label>
              </div>
            </div>
          
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <button type="submit" name="button" class="btn login_btn">Giriş Yap</button>
        </div>
     </form>
      </div>
    </div>
  </div>
</body>
</html>
