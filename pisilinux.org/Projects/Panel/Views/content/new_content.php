<?php import::view('header'); ?>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>Yeni İçerik Ekleme Formu</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label">KATEGORİSİ :</label>
        <div class="controls">
          <select name="category_id" id="" class="span11">
            <option value="">Yazının kategorinisi seçiniz...</option>
            <?php echo KategoriListesi(); ?>
          </select>
        </div>
      </div>
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
          <input type="text" name="label" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin..." required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">KISA AÇIKLAMA :</label>
        <div class="controls">
          <input type="text" name="keywords" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın..." required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">DURUM :</label>
        <div class="controls">
          <select name="status" id="" class="span11">
            <option value="">SEÇİNİZ...</option>
            <option value="1">AKTİF</option>
            <option value="0">PASİF</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">ANASAYFADA YAYINLANSINMI :</label>
        <div class="controls">
          <select name="mainpage" id="" class="span11">
            <option value="1" selected>EVET</option>
            <option value="0">HAYIR</option>
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