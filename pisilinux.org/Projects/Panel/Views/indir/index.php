<?php IMPORT::view('header'); ?>

<h1>İndirme Yöneticisi</h1>


<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>İndir Listesi</h5>
      <div class="pull-right" style="margin:5px;"><a href="<?php echo URL::base('panel/indir/yeni') ?> "><button>+</button></a></div>
    </div>
    <div class="widget-content nopadding" >

      <table class="table table-bordered ">
        <thead>
          <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Link</th>
            <th>MD5-SHA1</th>
           
            <th width="80">İşlem</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($list as $key) { ?>
          <tr >            
            <td><?php echo $key->baslik; ?></td>
            <td><?php echo $key->aciklama; ?></td>
            <td><?php echo $key->link; ?></td>
            <td><?php echo 'MD5: '.$key->md5sum.'<br>SHA1:'.$key->sha1sum; ?></td>
            
            <td>
            <a href="<?php echo URL::base('panel/indir/edit/'.$key->id); ?> "><button><i class="fa fa-edit"></i></button></a>
            <a href="<?php echo URL::base('panel/indir/delete/'.$key->id); ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash"></i></button></a>
            </td>
           
          </tr>    
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<?php Import::view('footer'); ?>