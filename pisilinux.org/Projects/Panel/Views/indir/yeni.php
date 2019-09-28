<?php import::view('header'); ?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni İndirme Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal">
		

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11" required>
              </div>
            </div>


            
             <div class="control-group">
              <label class="control-label">AÇIKLAMA :</label>
              <div class="controls">
 <input type="text" name="yazi" class="span11" required>
              </div>
            </div>

             
<div class="control-group">
              <label class="control-label">LİNK :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" required>
              </div>
            </div>
           
           <div class="control-group">
              <label class="control-label">md5sum :</label>
              <div class="controls">
                <input type="text" name="md5sum" class="span11" >
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">sha1sum :</label>
              <div class="controls">
                <input type="text" name="sha1sum" class="span11" >
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Sürümü :</label>
              <div class="controls">
                <select name="surum" id="">
                  <option value="0">Seçiniz</option>
                  <option value="1x">1x</option>
                  <option value="2x">2x</option>
                </select>
              </div>
            </div>


          
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>

<?php import::view('footer'); ?>

