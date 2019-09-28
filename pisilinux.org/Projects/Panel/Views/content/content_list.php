<?php import::view('header'); ?>
<h1>Yazılar</h1>

<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Yazı Listesi</h5>
      <div class="pull-right" style="margin:5px;"><a href="<?php echo Url::base('panel/content/new_content') ?> "><button>YAZI EKLE</button></a></div>
    </div>
    <div class="widget-content nopadding">

      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="100">Resim</th>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Durum</th>
            <th>Etiket</th>
            <th>Keyword</th>
            <th>Okunma</th>
            <th width="60">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach (content_list() as $key) { ?>
          <tr class="odd gradeX">
            <td><img src="<?php echo '../'.content_image($key->content) ?>" alt="" width="100"> <br><?php echo tcevir($key->create_date); ?></td>
            <td><?php echo $key->title; ?></td>
            <td><?php echo kelimebol($key->content,100); ?></td>
            <td><?php echo $key->status == '1'? 'AKTİF':'PASİF'; ?></td>
            <td><?php echo $key->label; ?></td>
            <td><?php echo $key->keywords; ?></td>
            <td><?php echo $key->hits; ?></td>
            <td>
            <a href="<?php echo Url::base('panel/content/edit/'.$key->id); ?> "><button><i class="fa fa-edit"></i></button></a>
            <a href="<?php echo Url::base('panel/content/delete/'.$key->id); ?> " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash"></i></button></a></td>
          </tr>    
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
<?php import::view('footer'); ?>