<?php import::view('header'); ?>

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">İçerik Ekle</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">

          <form role="form" method="post">

            <div class="form-group">
              <label>Wiki Kategori</label>
              <select name="category" id="" class="form-control" required>
                <option value=""><strong>Yazının kategorisini seçiniz...</strong></option>
                <?php foreach (wiki_kategoriler('30') as $key): ?>
                  <option value="<?php echo $key->id ?>" class="opt"><?php echo '-»'.$key->adi ?></option>
                   <?php foreach (wiki_kategoriler($key->id) as $key1): ?>
                     <option value="<?php echo $key1->id ?>"><?php echo '--»'.$key1->adi ?></option>
                  <?php endforeach ?>
                <?php endforeach ?>
               
              </select>             
            </div>

            <div class="form-group">
              <label>Baslık</label>
              <input class="form-control" name="title" placeholder="Yazının başlığını yazın."  required>
            </div>

            <div class="form-group">
                <label>Yazı</label>
                <textarea class="form-control" id="editor" name="content" rows="20" required></textarea>
            </div>

            <div class="form-group">
              <label>Etiketler</label>
              <input class="form-control" name="label" placeholder="Kelimeleri aralarına virgül koyarak yazın" required>
            </div>

            <div class="form-group">
              <label>Kısa Açıklama</label>
              <input class="form-control" name="keywords" placeholder="Yazı hakkında kısa açıklama yazın" >
            </div>
                    
              <button type="submit" class="btn btn-primary btn-block">KAYDET</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
 
   
<?php import::view('footer'); ?>