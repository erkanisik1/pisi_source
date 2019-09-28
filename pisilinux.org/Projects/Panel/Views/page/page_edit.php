<?php import::view('header'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    	<h5>Sayfa Düzenleme Formu</h5>
	</div>
    <div class="widget-content nopadding">
    	<form action="" method="post" class="form-horizontal">
    		
            <div class="control-group">
            	<label class="control-label">Başlık :</label>
            	<div class="controls">
                	<input type="text" name="title" value="<?php echo $pages->title; ?>" class="span11" required>
                	
              	</div>
            </div>            
            <div class="control-group">
            	<label class="control-label">Sayfa :</label>
              	<div class="controls">
					         <textarea name="content" id="editor" rows="50" class="span11" required><?php echo $pages->content; ?></textarea>
	                
            	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">Etiketler :</label>
            	<div class="controls">
               		<input type="text" name="label" value="<?php echo $pages->label; ?>" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin...">
              	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">Kısa açıklama :</label>
              	<div class="controls">
                	<input type="text" name="keywords" value="<?php echo $pages->keywords; ?>" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın...">
              	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">Durum :</label>
	            	<div class="controls">
      						<select name="status" id="" class="span11">
      							<option value="1" <?php echo $pages->status = '1'?'selected':''; ?> >Aktif</option>
      							<option value="0" <?php echo $pages->status = '0'?'selected':''; ?> >Pasif</option>
      						</select>
	              </div>
            </div>
            <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo $pages->id; ?>">
            	<button type="submit" class="btn btn-success btn-block">KAYDET</button>
            </div>
        </form>
    </div>
</div>
<?php import::view('footer'); ?>