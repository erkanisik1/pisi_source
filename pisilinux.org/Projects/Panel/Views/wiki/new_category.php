<?php import::view('header'); ?>


<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Kategori ekleme formu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Üst Kategori :</label>
              <div class="controls">
                <select name="ustkategori" id="" class="span11">
                <option value=""><strong>Yazının kategorinisi seçiniz...</strong></option>
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
              <label class="control-label">Kategori Adı :</label>
              <div class="controls">
                <input type="text" class="span11" name="kategori" >
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Kategori Açıklama :</label>
              <div class="controls">
                <input type="text" class="span11" name="aciklama" >
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Kategori resim :</label>
              <div class="controls">
                <input type="file" class="span11" name="resim" >
              </div>
            </div>
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
          </form>
        </div>
      </div>

   
<?php import::view('footer'); ?>

<!--  wikide uygulamalara kategori eklesek editörler grafik çokluortam gibi -->