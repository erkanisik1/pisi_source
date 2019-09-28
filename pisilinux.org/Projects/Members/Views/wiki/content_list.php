<?php import::view('header'); ?>


<!-- liste  -->
<div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    Wiki Yazılarım
     <div class="pull-right" style="margin:-6px;"><a href="/members/wiki/new_wiki"><button class="btn btn-default"> + WIKI EKLE</button></a></div>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>            
            <th>Başlık</th>
            <th>Kategori</th>
            <th>Tarih</th>
            <th>Ekleyen</th>
            <th>Durum</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $a = null;
         foreach ($yazilist as $key) { 
          $a = $a + 1; 
          ?>
          <tr>
            <td><?php echo $a; ?></td>
           <td><?php echo $key->baslik; ?></td>
           <td><?php echo wiki_katname($key->katid); ?></td>
           <td><?php echo tcevir($key->zaman); ?></td>
           <td><?php echo editor($key->editor); ?></td>
           <td><?php echo $key->durum; ?></td>
           
            <td>
              <a href="<?php echo Url::base('members/wiki/edit/'.$key->id); ?> "><button><i class="fa fa-edit"></i></button></a>
              <a href="<?php echo Url::base('members/wiki/delete/'.$key->id); ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--  -->
  <?php import::view('footer'); ?>