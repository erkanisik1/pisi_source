<?php import::view('header'); ?>


<!-- liste  -->
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>Wiki Yazıları</h5>
     <div class="pull-right" style="margin:-3px;"><a href="panel/wiki/new_content"><button class="btn">+YAZI EKLE</button></a></div>
  </div>
  <div class="widget-content nopadding">
     <table class="table table-bordered data-table" id="wiki_list">
        <thead>
          <tr>
            <th>#</th>            
            <th>Başlık</th>
            <th>Kategori</th>
            <th>Tarih</th>
            <th>Ekleyen</th>
            <th width="20">Durum</th>
            <th width="60">İşlemler</th> 
          </tr>
        </thead>
        <tbody>
          <?php $a = ''; foreach ($yazilist as $key) { 
             $a = (int) $a + 1; 

            ?>
          <tr>
            <td><?php echo $a; ?></td>
           <td><?php echo $key->baslik; ?></td>
           <td><?php echo wiki_katname($key->katid); ?></td>
           <td><?php echo tcevir($key->zaman); ?></td>
           <td><?php echo editor($key->editor); ?></td>
           <td><?php echo $key->durum == '1'?'AKTİF':'PASİF' ?></td>
           
            <td class="text-center">
              <a href="/panel/wiki/edit/<?php echo $key->id; ?> "><button><i class="fa fa-edit"></i></button></a>
              <a href="/panel/wiki/delete/<?php echo $key->id; ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

  </div></div>





<!--  -->
  <?php import::view('footer'); ?>