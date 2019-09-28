<?php import::view('header'); ?>

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">İçerik Ekle</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post">
            <h4><span class="label label-danger">* ile işaretli alanlar boş geçilemez...</span></h4>
            <div class="form-group">
              <label>*Kategorisi</label>
               <select name="category_id" id="" class="form-control" required>
                  <option value="">Yazının kategorinisi seçiniz...</option>
                  <?php echo KategoriListesi(); ?>
                </select>                     
            </div>
            <div class="form-group">
              <label>*Başlık</label>
              <input type="text" name="title" class="form-control" required>            
            </div>

            <div class="form-group">
              <label>*İçerik</label>
              <textarea name="content" id="editor" rows="20" class="form-control" required></textarea>                 
            </div>

             <div class="form-group">
              <label>*Etiketler</label>
              <input type="text" name="keywords" class="form-control" placeholder="Kelimeleri virgülle ayırmayı unutmayın..." required>            
            </div>

             <div class="form-group">
              <label>*Kısa Açıklama</label>
              <input type="text" name="description" class="form-control" required placeholder="Yazı hakkında kısa bir açıklama yazın...">            
            </div>
 <button type="submit" class="btn btn-primary btn-block">KAYDET</button><br>
<h4><span class="label label-info">Yazılarınız ekibimizce kontrol edildikten sonra yayına alınacaktır, yazınızda düzenlemeler yada gerekli değişiklikler yapılabilir.</span></h4>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




    
     
      
<?php import::view('footer'); ?>