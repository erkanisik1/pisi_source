<?php import::view('header'); ?>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>FORUM KATEGORİLER</h5>
    <div class="pull-right" style="margin:5px;"><a href="/panel/forum/forumKat"><button>YENİ KATEGORİ</button> </a></div>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Kategoriler</th>
          <th>Açıklama</th>  
          <th width="80">İşlemler</th>
        </tr>
      </thead>
      <tbody>   
        <?php foreach ($katlist as $key ): ?>
         <tr>
          <td><b><?php echo $key->adi ?></b></td>
          <td><?php echo $key->aciklama ?></td>
          <td class="islemler" style="text-align: center;">
<a href="/panel/forum/kategori_edit/<?php echo $key->id; ?>"><i class="fa fa-pencil"></i></a>
<a href="/panel/forum/kategori_delete/<?php echo $key->id; ?>" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><i class="fa fa-remove"></i></a>
</td>
        </tr>     
        <?php foreach (forun_alt_kat($key->id) as $key ): ?>
                     <tr>
          <td>--<?php echo $key->adi ?></td>
          <td><?php echo $key->aciklama ?></td>
          <td class="islemler" style="text-align: center;">
<a href="/panel/forum/kategori_edit/<?php echo $key->id; ?>"><i class="fa fa-pencil"></i></a>
<a href="/panel/forum/kategori_delete/<?php echo $key->id; ?>" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><i class="fa fa-remove"></i></a>
</td>
        </tr>  
            <?php endforeach ?>    
      <?php endforeach ?>            
      <?php //echo yFunc::forumKategoriTablosu('kategori'); ?>

    </tbody>
  </table>
</div>
</div>

<?php import::view('footer'); ?>