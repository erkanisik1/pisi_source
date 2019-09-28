
 
 <?php import::view('header'); ?>
<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">Profilim</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Adı Soyadı</label>
              <input class="form-control" name="username" value="<?php echo $profil->username; ?>">
            </div>

             <div class="form-group">
              <label>Takma ad</label>
              <input class="form-control" name="nickname" value="<?php echo $profil->nickname; ?>">
            </div>


            <div class="form-group">
              <label>Mail Adresi</label>
              <input class="form-control" name="mail" value="<?php echo $profil->mail; ?>">
            </div>

            <div class="form-group">
              <label>Avatar (<strong>Avatar resmi en fazla 80x80 ölçülerinde olmalıdır..</strong>)</label><br>

              <img src="<?php echo Url::base($profil->avatar); ?> " alt="" width="80">
              <input type="file" name="avatar" class="form-control"  >
            </div>
        

              <div class="form-group">
              <label>Eğitim</label>
              <input class="form-control" name="egitim" value="<?php echo $profil->egitim; ?>">
            </div>

            <div class="form-group">
              <label>Meslek</label>
              <input class="form-control" name="meslek" value="<?php echo $profil->meslek; ?>">
            </div>

            <div class="form-group">
              <label>Becerileriniz</label>
              <input class="form-control" name="beceri" value="<?php echo $profil->beceri; ?>">
            </div>

             <input type="hidden" name="user_id" value="<?php echo $profil->user_id; ?>">
              <button type="submit" class="btn btn-primary btn-block">GÜNCELLE</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
   
   
<?php import::view('footer'); ?>
