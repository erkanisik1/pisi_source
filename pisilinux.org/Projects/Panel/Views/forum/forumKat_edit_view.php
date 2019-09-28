<?php IMPORT::view('header'); ?>
<h2>KATEGORİ DÜZENLE</h2><hr>
	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>YENİ KATEGORİ </h5>
        </div>
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            <div class="control-group">
	              <label class="control-label">Üst Kategori :</label>
		              <div class="controls">
		               	<select name="kat_ustid" id="" class="span11">
		               		<option value="0">ANA KATEGORİ</option>
		               		<?php foreach (forum_kategori() as $key ): ?>
		               			<option value="0"><?php echo $key->adi ?></option>
		               		<?php endforeach ?>
		               		 
		               	</select>
		              </div>
		            </div>
	            	<div class="control-group">
		              <label class="control-label">Kategori Adı:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="adi" value="<?php echo $edit->adi ?>">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Açıklama:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="aciklama" value="<?php echo $edit->aciklama ?>">
		              </div>
		            </div>

            <div class="form-actions">
            	<input type="hidden" name="id" value="<?php echo $edit->id ?> ">
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
<?php Import::view('footer'); ?>