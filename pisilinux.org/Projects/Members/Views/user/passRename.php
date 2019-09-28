<?php import::view('header');  ?>

<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">Şifre Değiştirme Formu</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post" >

 <?php if(isset($message)){ ?>
          <div class="alert alert-error alert-block" style="margin:10px;border-radius: 5px;"> 
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading">Hata!</h4>
            <?php echo $message; ?> 
          </div>
        <?php } ?>
             <div class="form-group">
              <label>Mevcut Şifreniz</label>
              <input class="form-control" type="password" name="pass" value="">
            </div>


             <div class="form-group">
              <label>Yeni Şifre</label>
              <input class="form-control" type="password" name="newpass" value="">
            </div>


             <div class="form-group">
              <label>Yeni Şifre Tekrar</label>
              <input class="form-control" type="password" name="newpassrepeat" value="">
            </div>
                    
              <button type="submit" class="btn btn-default">KAYDET</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
    <!--  -->


<?php import::view('footer'); ?>