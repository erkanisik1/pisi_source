<?php IMPORT::view('header'); ?>

	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>KATEGORİ Düzenle</h5>
        </div>
        
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
	            <div class="control-group">
	              <label class="control-label">Üst Kategori :</label>
		              <div class="controls">
		               	<select name="ustkategori" id="" class="span11">
		               		<option value="0">ANA KATEGORİ</option>
		               		<?php echo yonetimKategori($ustkatid); ?>
		               	</select>
		              </div>
		            </div>
	            	<div class="control-group">
		              <label class="control-label">Kategori Adı:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="kategori" value="<?php echo $edit->adi ?>">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Kategori Açıklaması:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="aciklama" value="<?php echo $edit->aciklama; ?>">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Kategori Resmi:</label>
		              <div class="controls">
		                 <img src="<?php echo baseUrl($edit->img); ?>" width="150">
		                 <input type="file" name="img" class="span11" />
		              </div>
		            </div>

            <div class="form-actions">
            	<input type="hidden" name="id" value="<?php echo $edit->id ?> ">
            	<input type="hidden" name="imgsil" value="<?php echo pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$edit->img ?>">
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
<?php Import::view('footer'); ?>