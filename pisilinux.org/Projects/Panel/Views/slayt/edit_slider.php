<?php import::view('header'); ?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Slider Düzenleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

           <div class="control-group">
              <label class="control-label">RESİM :</label>
              <div class="controls">
                <div >
                  <img src="<?php echo baseUrl($edit->resim); ?>" width="200">
                </div>
                <input type="file" name="resim" class="span11">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11" value="<?php echo $edit->baslik; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">AÇIKLAMA :</label>
              <div class="controls">
                 <textarea name="aciklama" id="area2" rows="20" class="span11"><?php echo $edit->aciklama; ?></textarea>
                <script>
            CKEDITOR.replace( 'aciklamma' );
        </script>
              </div>
            </div>
  <div class="control-group">
              <label class="control-label">LİNK :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" value="<?php echo $edit->link; ?>" >
              </div>
            </div>

            <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo $edit->id ?>">
              <input type="hidden" name="resimurl" value="<?php echo $edit->resim ?>">
              <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
          </form></div></div>
<?php import::view('footer'); ?>