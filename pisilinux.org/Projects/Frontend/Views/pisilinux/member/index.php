<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              
              <form class="card" action="" method="post">
                <div class="card-body p-6">
                  <div class="card-title">PİSİLİNUX ÜYE GİRİŞİ</div>
                  <div class="form-group">
                    <label class="form-label">E-Posta Adresiniz</label>
                    <input type="email" class="form-control" id="exampleInpuTHEMA_NAMEil1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Şifreniz
                      <a href="<?php echo URL::base('member/password_forgot') ?>" class="float-right small">Şifremi Unuttum</a>
                    </label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="remember" value="1">
                      <span class="custom-control-label">Beni Hatırla</span>
                    </label>
                  </div>
                  <div class="form-footer">
                     <input type="hidden" name="currentDate" value="<?php echo date('Y-m-d'); ?>">
                    <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">

                Henüz Hesabınız Yokmu? <a href="<?php echo URL::base('member/register') ?>">Üye Olun</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>