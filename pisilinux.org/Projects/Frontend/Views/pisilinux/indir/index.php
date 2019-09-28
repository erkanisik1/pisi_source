<?php import::view(THEMA_NAME.'assets/header');
Import::style('pisilinux/css/tabs.css');
?>


<br><br>
<center><STRONG><h2><?php echo translate('pisilinux_downloadable_versions'); ?> </h2></STRONG></center>  <hr>
<section id="Latest-News" class="light-wrapper">
  <div class="conta4iner in4ner">
    <div class="container">
      <main>
        <!-- tab başlıkları -->
        <input id="tab1" class="input" type="radio" name="tabs" checked>
        <label for="tab1" class="label">PİSİLİNUX 2X</label>

        <input id="tab2" class="input" type="radio" name="tabs">
        <label for="tab2" class="label">PİSİLİNUX 1X</label>
        <!-- /tab başlıkları -->
        <!-- tab içerikleri 1 -->
        <section id="content1" class="section">
          <?php foreach ($liste as $key): 
          $md5 = '';$sha1 = ''; 
          if ($key->md5sum) {$md5 = '<br><strong> MD5SUM: </strong>'.$key->md5sum.' ';}
          if ($key->sha1sum) {$sha1 = '<br><strong> SHA1SUM: </strong>'.$key->sha1sum;}?>
          
            <?php if ($key->surum == '2x'): 


          if (Cookie::select('downup')) {
          $sec = '<er class="indirmesayisi" id="'.$key->id.'"></er>';
           Cookie::delete('downup');
          }else{

            $sec = '( '.$key->count.' )';
          }
            ?>
              <p>
                <div class="col-md-12">
                  <blockquote class="blockquote-2">
                    <p><?php echo $key->baslik; ?></p>
                    <span class="quote-name"><?php echo $key->aciklama.$md5.$sha1 ?></span>

                  
                    <?php if ($key->link): ?>
                      <a href="<?php echo $key->link ?>" class="pull-right btn btn-default indir"  data-id="<?php echo $key->id; ?>" target="_blank"><?php echo translate('download'); ?>  
                         <?php //echo $sec; ?> </a>
                    <?php endif ?>
                  </blockquote>
                </div>
              </p>
            <?php endif ?>
          <?php endforeach ?>
        </section>
        <!-- /tab içerikleri 1 -->
        <!-- tab içerikleri 2 -->
        <section id="content2" class="section">
          <?php foreach ($liste as $key): $md5 = '';$sha1 = ''; 
          if ($key->md5sum) {$md5 = '<br><strong> MD5SUM: </strong>'.$key->md5sum.' ';}
            if ($key->sha1sum) {$sha1 = '<br><strong> SHA1SUM: </strong>'.$key->sha1sum;}?>
            <?php if ($key->surum == '1x'):
 if (Cookie::select('downup')) {
          $sec = '<er class="indirmesayisi" id="'.$key->id.'"></er>';
           Cookie::delete('downup');
          }else{

            $sec = '( '.$key->count.' )';
          }

             ?>
              <p>
                <div class="col-md-12">
                  <blockquote class="blockquote-2">
                    <p><?php echo $key->baslik ?></p>
                    <span class="quote-name"><?php echo $key->aciklama.$md5.$sha1 ?></span>
                    <?php if ($key->link): ?>
                      <a href="<?php echo $key->link ?>" class="pull-right btn btn-default indir"  data-id="<?php echo $key->id; ?>" target="_blank">İNDİR </a>
                    <?php endif ?>
                  </blockquote>
                </div>
              </p>
            <?php endif ?>
          <?php endforeach ?>
        </section>
        <!-- /tab içerikleri 2 -->
      </main>
    </div>
  </div>
</section>


  <?php import::view(THEMA_NAME.'assets/footer'); ?>