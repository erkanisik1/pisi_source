<?php import::view('header'); ?>
<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">İçerik Düzenle</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post">
            <div class="form-group">
              <label>Wiki Kategori</label>
              <select name="kategori" id="" class="form-control">
                <option value=""><strong>Yazının kategorinisi seçiniz...</strong></option>
                <?php foreach (wiki_kategoriler('30') as $key): ?>
                  <option value="<?php echo $key->id ?>" <?php echo $key->id == $content->katid?'selected':''; ?>><?php echo $key->adi ?></option>
                <?php endforeach ?>
               
              </select>             
            </div>

            <div class="form-group">
              <label>Baslık</label>
              <input class="form-control" name="baslik" value="<?php echo $content->baslik; ?>">
            </div>

            <div class="form-group">
                <label>Yazı</label>
                <textarea class="form-control" id="editor" name="yazi" rows="20"><?php echo $content->detay; ?></textarea>
               
              </div>

              <div class="form-group">
              <label>Etiketler</label>
              <input class="form-control" name="label" value="<?php echo $content->label; ?>">
            </div>

            <div class="form-group">
              <label>Kısa Açıklama</label>
              <input class="form-control" name="keywords" value="<?php echo $content->keywords; ?>">
            </div>

            <div class="form-group">
              <label>Durumu</label>
              <select name="durum" class="form-control">
                <option value="1" <?php selected($content->durum,'1') ?>>Aktif</option>
                <option value="0" <?php selected($content->durum,'0') ?>>Pasif</option>
              </select>
            </div>
               
               <input type="hidden" name="id" value="<?php echo $content->id; ?>">	     
              <button type="submit" class="btn btn-primary btn-block">KAYDET</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
    <!--  -->
   
<?php import::view('footer'); ?>