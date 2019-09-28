<?php import::view('header'); ?>
 
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni Sayfa Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
			<!-- 
			
            <div class="control-group">
              <label class="control-label">RESİM :</label>
              <div class="controls">
                <input type="file" name="resim" class="span11">
              </div>
            </div>
             -->

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" required>
              </div>
            </div>


            
             <div class="control-group">
              <label class="control-label">YAZI :</label>
              <div class="controls">

                <textarea name="content" id="editor" rows="20" class="span11"></textarea>
              
              </div>
            </div>

             

            <div class="control-group">
              <label class="control-label">ETİKETLER :</label>
              <div class="controls">
                <input type="text" name="label" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin...">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">KISA AÇIKLAMA :</label>
              <div class="controls">
                <input type="text" name="keywords" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın...">
              </div>
            </div>


           

       
          
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>
<?php import::view('footer'); ?>