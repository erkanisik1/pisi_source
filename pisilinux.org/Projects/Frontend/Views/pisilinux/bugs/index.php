<?php import::view(THEMA_NAME.'assets/header.php'); ?>
<br><br>


<?php if (Session::select('login')){ ?>
   <button id="gorev" class="btn btn-primary" style="margin-bottom:5px;" >+ Hata kaydı ekle</button>
<?php }else{ ?>
 <div class="container">
  <div class="card-deck">
    

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">YENİ HATA KAYIT</div>
  <div class="card-body">
    
    <p class="card-text">Üye girişi yaptıktan sonra Pisi Linux sistemi ile ilgili hata kaydını bırakabilirsiniz...</p>
  </div>
    <div class="card-footer">
      <small class="text-muted"><a href="/bugs/new"><button class="btn btn-primary btn-block">>></button></a></small>
    </div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">HATA ARAMA</div>
  <div class="card-body">    
    <p class="card-text">Hali hazırda bırakılmış olan hata kayıtlarında arama yapabilir, çözülmüşse çözümünü öğrenebilir yada çözümünü biliyorsanız yardımcı olabilirsiniz.</p>
  </div>
   <div class="card-footer">
      <small class="text-muted"><a href="/bugs/search"><button class="btn btn-primary btn-block">>></button></a></small>
    </div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">ÜYE OL</div>
  <div class="card-body">
   <p class="card-text">Pisi Linux sitesine üye olarak hata kaydı girebilir yada hata kaydı girmiş insanlara yardımcı olarak destek olabilirsiniz.</p>
  </div>
   <div class="card-footer">
      <small class="text-muted"><a href="/member/register/"><button class="btn btn-primary btn-block">>></button></a></small>
    </div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">YARDIM</div>
  <div class="card-body">
    
    <p class="card-text">Pisi Linux Hata kaydı hakkında yardımcı olmak için hazırlanmıştır. takıldığınız yerlerde bu yardım sayfasından hata kaydı sayfasının nasıl kullanılacağını öğrenebilirsiniz.</p>
  </div>
   <div class="card-footer">
      <small class="text-muted"><a href="/bugs/help"><button class="btn btn-primary btn-block">>></button></a></small>
    </div>
</div>
  </div>
</div>


<?php } ?>  
    <!-- 
    <table class="table" id="gorevlist">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>GÖREV TÜRÜ</th>
          <th>KATEGORİ</th>
          <th>ÖNEMİ</th>
          <th>ÖZET</th>
          <th>TARİH</th>
          <th>DURUM</th>
          <th>CEVAP</th>
          <th>DÜZENLEME</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

      </tbody>
    </table>
     -->

<br><br>



<?php import::view(THEMA_NAME.'assets/footer'); ?>