<?php import::view(THEMA_NAME.'assets/header');  ?>
<style>
.pagination {
  display: inline-block;
  border-radius: 5px;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 5px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: gray;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
 .ileti thead tr{background: #9E0841;}
  .ileti thead th{color: #fff; font-weight: bold;}
</style>

<div class="my-3 my-md-5">
  <div class="container">
    <div class="page-header">
      <h1 class="page-title"><?php echo translate('questionanswer'); ?></h1>
      
    </div>
<!-- alert -->
    <div class="alert alert-danger forumalert">
                    Yeni konu açma sorunu giderilmiştir...
                  </div>
    <!-- alert -->
      <div class="page-options d-flex">
        <?php if(Session::select('userid')){ ?>
          <a href="/forum/yenikonu"> <button class="form-control btn btn-primary"><?php echo translate('newsubject'); ?></button></a>
        <?php }else{ ?> 
          <a href="/member">
          <button class="form-control btn btn-primary alert1" style="height: 38px;">Konu Açmak için giriş yapın.</button>
          </a>
        <?php } ?>&nbsp;  &nbsp;
  
        <select class="custom-select" name="gorunum" id="gorunum" >
          <option value="0" selected>Görünüm Seç</option>
          <option value="1">Forum</option>
          <option value="2">Soru Cevap</option>
        </select>&nbsp;  &nbsp;
        
        <select class="form-control custom-select" id="formcategory">
          <option value=""><?php echo translate('selectcategory'); ?></option>
          <?php foreach (question_category() as $key): ?>
            <option value="<?php echo $key->adi ?>"><?php echo $key->adi ?></option>
          <?php endforeach ?>
        </select>&nbsp;  &nbsp;

        <select class="custom-select listcount" >
          <option value="">Gösterim seç</option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
  
    <div class="row">
      <!-- sol kısım -->
<!-- <div class="col-sm-2">
<a href="" class="btn btn-block btn-primary mb-6">
<i class="fe fe-plus mr-2"></i>SORU SOR
</a>
<div class="list-group list-group-transparent mb-0">
<a href="../docs/alerts.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Kategoriler</a>
<a href="../docs/avatars.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Etiketler</a>
<a href="../docs/buttons.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-plus-square"></i></span>Sorular</a>
<a href="../docs/colors.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-feather"></i></span>Cevapsız Sorular</a>
<a href="../docs/cards.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-image"></i></span>Çözülen Sorular</a>
</div>
</div> -->
<!-- orta kısım-->

<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="table-responsive">
    <div class="card-status bg-red"></div>
    
      <table class="table ileti">
         <thead>
          <tr>
            <th colspan="2" style="text-align: center;" >Son Mesajlar</th>
          
          </tr>
        </thead>
          <tbody>
        <?php foreach ($sonmesajlar as $key):

            if ($key->content_id == 0) {
              $id = $key->id;
            }else{
              $id = $key->content_id;
            }

         ?>
           <tr> 
          <td><a href="<?php echo URL::base('forum/konu/'.$id.'-'.$key->title_seo) ?>"><?php echo $key->content_id == '0'?'( Soru ) ':'( Cevap ) '  ?><?php echo $key->title; ?></a></td>
          <td width="100"><?php echo tcevir($key->insertDate); ?></td>
        </tr>
        <?php endforeach ?>
        </tbody>
       </table>
     </div>
  </div>

  <div class="card">
    <!-- soru listeleme -->

    <div class="table-responsive">
      <table class="table table-hover table-outline table-vcenter text-nowrap card-table ileti" id="question">
        <thead>
          <tr>
            <th class="text-center w-1"><i class="icon-people"></i></th>
            <th><?php echo translate('title') ?></th>
            <th class="text-center"><?php echo translate('category'); ?></th>
            <th class="text-center"><?php echo translate('reads'); ?></th>
            <th><?php echo translate('reply'); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (forum_content() as $key): 
            if (avatar($key->user_id)){ 
              $avatar = URL::base(avatar($key->user_id));  
            }else{ 
              $avatar = URL::base('img/user.png'); 
            } 
            ?>
            <tr>
              <td class="text-center">


                <div class="avatar d-block" style="background-image: url( <?php echo $avatar;//echo URL::base(avatar($key->user_id)); ?>)">

                  <!--  <span class="avatar-status bg-green"></span> -->
                </div>
              </td>
              <td>
                <div><a href="<?php echo URL::base('forum/konu/'.$key->id.'-'.$key->title_seo) ?>"><?php echo $key->title; ?></a>  </div>
                <div class="small text-muted"><?php echo kelimebol($key->content,'50') ?></div>
              </td>
              <td>
                <div class="text-center"><a href="<?php echo URL::base('forum/kategori/').$key->category_id.'-'.forum_kategori_row($key->category_id)->adi_seo ?>" title="Kategorisinndeki soruları listeler"><?php echo forum_kategori_adi($key->category_id); ?></a></div>
              </td>
              <td>
                <div class="mx-auto chart-circle chart-circle-xs" data-thickness="3" data-color="blue">
                  <div class="chart-circle-value"><?php echo $key->view; ?></div>
                </div>
              </td>
              <td class="text-center">
                <div class="mx-auto chart-circle chart-circle-xs" data-thickness="3" data-color="blue">
                  <div class="chart-circle-value"><?php echo contentlist($key->id); ?></div>
                </div>
              </td>
            </tr>
          <?php endforeach ?>



        </tbody>
      </table>
    </div>
  </div>
  <!-- Sayfalama Başlıyor -->
<!-- 
<div>
<ul class="pagination justify-content-center">
<li class="page-item page-prev disabled">
<a class="page-link" href="#" tabindex="-1">
Prev
</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li>
<li class="page-item page-next">
<a class="page-link" href="#">
Next
</a>
</li>
</ul>
</div>
</div>
-->
  </div>
</div>
</div>
<?php import::view(THEMA_NAME.'assets/footer');  ?>
<script>
  $(function(){
        if (Cookies.get('forumalert')) {
      $("div.forumalert").remove();
    }else{
      setTimeout(function(){
        $("div.forumalert").fadeOut("slow", function () {
        $("div.forumalert").remove();
        });
      }, 5000);
      Cookies.set('forumalert', '1');
    }

  })
</script>