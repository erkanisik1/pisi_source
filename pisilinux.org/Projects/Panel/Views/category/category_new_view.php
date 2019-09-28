<?php IMPORT::view('header'); ?>
<h2>YENİ KATEGORİ EKLE</h2><hr>
	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>YENİ KATEGORİ </h5>
        </div>
        
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            <div class="control-group">
	              <label class="control-label">Üst Kategori :</label>
		              <div class="controls">
		               	<select name="ustkategori" id="" class="span11">
		               		<option value="0">ANA KATEGORİ</option>
		               		<?php foreach (kategoriler() as $key ): ?>
		               			<option value="<?php echo $key->id ?>"><?php echo $key->adi ?></option>
		               		<?php endforeach ?>
		               		 
		               	</select>
		              </div>
		            </div>
	            	<div class="control-group">
		              <label class="control-label">Kategori Adı:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="kategori" placeholder="Yeni kategori adını yazın...">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Kategori Açıklaması:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="aciklama" placeholder="Kategori Açıklamasını yazın...">
		              </div>
		            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
<?php Import::view('footer'); ?>