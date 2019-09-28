<?php import::view(THEMA_NAME.'assets/header');  ?>
<br>
<div class="container">
  <?php //foreach ($konular as $key): ?>
    
<div class="col-md-12 col-xl-12">


      <table class="table table-bordered" style="background:#fff">
        <thead>
          <tr>
            <th></th>
            <th>Konu / Konu Yazarı</th>
            <th>Son Mesaj</th>
            <th>Hit</th>
            <th>Cevaplar</th>
          </tr>
        </thead>
          <?php foreach ($konular as $key1): ?>
            <tr>
          <td width="66"><img src="<?php echo Url::base('upload/pisilinux_pisi.png') ?>" alt="pisi logo" width="64"></td>
          <td style="border-left: solid 1px #ccc;border-right: solid 1px #ccc">
            <h5 class="card-title">
              
            <a href="/forum/konu/<?php echo $key1->id.'-'.$key1->title_seo; ?>" title="<?php echo kelimebol($key1->content,250); ?>"><?php echo $key1->title; ?></a>
            </h5>
             <h6 class="card-subtitle mb-2" style="color:#333;"> <?php echo yazar($key1->user_id).' / '.tcevir($key1->insertDate,1); ?>  </h6>
           

            <p></p>


          </td>
          <td><?php //echo kelimebol(end_message($key1->id)->content,50); ?></td>
          <td width="20" class="text-center"><?php echo $key1->view; ?></td>
          <td width="60" class="text-center"><?php echo contentlist($key1->id); ?></td>
        </tr>
           
        <?php endforeach ?> 
        
      </table>

</div>
  <?php //endforeach ?>
</div>
      <?php import::view(THEMA_NAME.'assets/footer');  ?>