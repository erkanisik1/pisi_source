<?php import::view('header'); ?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>İndirme Düzenleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal">
		

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11" value="<?php echo $edit->baslik ?>">
              </div>
            </div>


            
             <div class="control-group">
              <label class="control-label">AÇIKLAMA :</label>
              <div class="controls">
 <input type="text" name="yazi" class="span11" value="<?php echo $edit->aciklama ?>">
              </div>
            </div>

             
<div class="control-group">
              <label class="control-label">LİNK :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" value="<?php echo $edit->link ?>">
              </div>
            </div>
           
           <div class="control-group">
              <label class="control-label">md5sum :</label>
              <div class="controls">
                <input type="text" name="md5sum" class="span11" value="<?php echo $edit->md5sum ?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">sha1sum :</label>
              <div class="controls">
                <input type="text" name="sha1sum" class="span11" value="<?php echo $edit->sha1sum ?>">
              </div>
            </div>


          
            <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo $edit->id ?>">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>

<?php import::view('footer'); ?>

