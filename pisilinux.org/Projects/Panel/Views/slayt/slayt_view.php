<?php import::view('header'); ?>
<div id="breadcrumb"> <a href="<?php echo URL::base('panel') ?>" class="tip-bottom" data-original-title="Go to Home">
  <i class="fa fa-home"></i> Anasayfa</a> <a href="#"><?php echo $breadcrumb; ?></a>
</div>
</div>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
    <h5>Slayt Listesi</h5>
    <div class="pull-right" style="margin:5px;"><a href="<?php echo URL::base('panel/slayt/new_slider');?>"><button>YENİ SLAYT </button> </a></div>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="100">RESİM</th>
          <th>BAŞLIK</th>
          <th>AÇIKLAMA</th>
          <th>LİNK</th>
          <th width="" colspan="2">SIRALAMA</th>
          <th width="100">İŞLEMLER</th> 
        </tr>
      </thead>
      <tbody>
        <?php foreach ($slider_list as $key): ?>
          <tr class="gradeX">
            <td><img src="<?php echo URL::base($key->resim) ?>" alt="" width="100"></td>
            <td><?php echo $key->baslik ?></td>
            <td><?php echo $key->aciklama ?></td>
            <td><?php echo $key->link ?></td>
            <td style="text-align: center"><?php echo $key->sira; ?></td>
            <td width="30" style="text-align: center;">  
              <?php if ($key->sira > 1): ?>
                <a href="<?php echo URL::base('panel/slayt/up/'.$key->id); ?>"><i class="fa fa-chevron-up"></i></a>
              <?php endif ?>
              <?php if ($sira_max > $key->sira): ?>
                <a href="<?php echo URL::base('panel/slayt/down/'.$key->id); ?>"><i class="fa fa-chevron-down"></i></a>
              <?php endif ?>                 
            </td>
            <td style="text-align: center;" >
              <a href="<?php echo URL::base('panel/slayt/edit/'.$key->id); ?> "><button><i class="fa fa-edit fa-lg"></i></button></a>
              <a href="<?php echo URL::base('panel/slayt/delete/'.$key->id); ?>" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash fa-lg"></i></button></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<?php import::view('footer'); ?>