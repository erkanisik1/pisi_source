<?php import::view('header'); ?>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>wiki ekleme formu</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label">KATEGORİSİ :</label>
        <div class="controls">
           <select name="kategori" id="" class="form-control">
                <option value=""><strong>Wiki kategorinisi seçiniz...</strong></option>
                <?php foreach (wiki_kategoriler('30') as $key): ?>
                  <option value="<?php echo $key->id ?>"><?php echo $key->adi ?></option>
                   <?php foreach (wiki_kategoriler($key->id) as $key1): ?>
                     <option value="<?php echo $key1->id ?>"><?php echo '-»'.$key1->adi ?></option>
                  <?php endforeach ?>
                <?php endforeach ?>
               
              </select>  
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">BAŞLIK :</label>
        <div class="controls">
          <input type="text" name="baslik" class="span11" required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">YAZI :</label>
        <div class="controls">
          <textarea name="yazi" id="editor" rows="20" class="span11"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">ETİKETLER :</label>
        <div class="controls">
          <input type="text" name="etiket" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin..." required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">KISA AÇIKLAMA :</label>
        <div class="controls">
          <input type="text" name="keywords" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın..." >
        </div>
      </div>


      <div class="form-actions">
        <button type="submit" class="btn btn-primary btn-block">KAYDET</button>
      </div>
    </form>
  </div>
</div>






   
   
<?php import::view('footer'); ?>