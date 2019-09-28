<?php import::view(THEMA_NAME.'assets/header'); ?>

<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col mx-auto">
              
              <form class="card" action="" method="post">
                <div class="card-body p-12">
                  <div class="card-title">PİSİLİNUX YENİ ÜYE KAYIT</div>
                  <br>
                  

                   <h6 class="card-subtitle mb-2 text-muted">Sitemize üye olarak forum, hata kaydı ve bir çok olanaklardan yararlanabilirsiniz. <br>Sizi daha iyi tanımak adına ( Eğitim, Meslek, Beceriler ) alanlarını doldurursanız memnun oluruz. <br> <span style="color:#FF0000;font-weight: bolder;">Yıldızlı alanların doldurulması mecburidir.</span> </h6>
                    <div class="form-group">
                    <label class="form-label">* <?php echo translate('namesurname'); ?></label>
                    <input type="text" class="form-control" name="username" required>
                  </div>

                  <div class="form-group">
                    <label class="form-label">* <?php echo translate('emailadress') ?></label>
                    <input type="email" class="form-control" name="email" required >
                  </div>

                  <div class="form-group">
                    <label class="form-label">* <?php echo translate('password') ?></label>
                    <input type="password" class="form-control" name="password" id="password"  required>
                  </div>

                  <div class="form-group">
                    <label class="form-label">* <?php echo translate('passwordrepeat') ?></label>
                    <input type="password" class="form-control" name="password2" id="password2"  required ">
                     <div class="alert" id="divCheckPasswordMatch">
                  </div>

                     <div class="form-group">
                    <label class="form-label"><?php echo translate('training'); ?></label>
                    <input type="text" class="form-control" name="egitim">
                  </div>

                  <div class="form-group">
                    <label class="form-label"><?php echo translate('job'); ?></label>
                    <input type="text" class="form-control" name="meslek">
                  </div>

                   <div class="form-group">
                    <label class="form-label"><?php echo translate('skills') ?></label>
                    <input type="text" class="form-control" name="beceri">
                  </div>

                  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Lc2qXwUAAAAAHNT7pTU8dj1KTWP8fYNhm4Wxjv6"></div>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" id="submit"><?php echo translate('register'); ?></button>
                  </div>
                </div>
              </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>


					
<?php import::view(THEMA_NAME.'assets/footer'); ?>