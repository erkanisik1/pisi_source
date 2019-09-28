<?php import::view('header'); ?>


<!-- liste  -->
<div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    Wiki Kategorileri
     <div class="pull-right" style="margin:-3px;"><a href="<?php echo Url::base('panel/wiki/new_category') ?> "><button>YENİ KATEGORİ EKLE</button></a></div>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
              <th width="70">Resim</th>
             <th>Kategori</th>
             <th>Açıklama</th>
            <th>İşlemler</th> 
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($katList as $key) {  ?>
          <tr>
           <td><img src="<?php echo Url::base($key->img); ?>" alt="" width="65"></td>
          
           <td><?php echo $key->adi; ?></td>
           <td><?php echo $key->aciklama; ?></td>
           
            <td>
              <a href="<?php echo Url::base('panel/wiki/edit/'.$key->id); ?> "><button><i class="fa fa-edit"></i></button></a>
              <a href="<?php echo Url::base('panel/wiki/delete/'.$key->id); ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>


          <!-- alt kategoriler varsa -->
<?php  $a = ''; foreach (wiki_kategoriler($key->id) as $key1):  ?>
    <tr>
           <td><img src="<?php echo Url::base($key1->img); ?>" alt="" width="65"></td>
          
           <td><?php echo '----»'.$key1->adi; ?></td>
           <td><?php echo $key1->aciklama; ?></td>
           
            <td>
              <a href="<?php echo Url::base('panel/wiki/edit/'.$key1->id); ?> "><button><i class="fa fa-edit"></i></button></a>
              <a href="<?php echo Url::base('panel/wiki/delete/'.$key1->id); ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>
<?php endforeach ?>
         

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--  -->
  <?php import::view('footer'); ?>