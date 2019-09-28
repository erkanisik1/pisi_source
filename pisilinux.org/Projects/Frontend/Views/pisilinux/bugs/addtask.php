<?php import::view(THEMA_NAME.'assets/header.php'); ?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Pisi Linux Hata Kaydı
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Görev Türü</label>
                  <select name="tasktype" id="" class="form-control">
                    <option value="">Hata Raporu</option>
                    <option value="">Özellik Talebi</option>
                    <option value="">Destek Talebi</option>
                    <option value="">Genel</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <select name="category" id="" class="form-control">
                    <option value="">Paketler: Main</option>
                    <option value="">Paketler: Core</option>
                    <option value="">Paketler: Contrib</option>
                    <option value="">Paketler: pisilife-2</option>
                    <option value="">Çekirdek</option>
                    <option value="">Web Sitesi</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Durum</label>
                  <select name="Status" id="" class="form-control">
                    <option value="">Onaylanmamış</option>                    
                  </select>
                </div>

                <div class="form-group">
                  <label>Önem</label>
                  <select name="severity" id="" class="form-control">
                   <option value="">Kritik</option>
                    <option value="">Yüksek</option>
                    <option value="">Orta</option>
                    <option value="">Düşük</option>                   
                  </select>
                </div>




              </div>
              <div class="col-md-8" style="border-left: 1px solid #ccc;margin-bottom: 5px;">
                <div class="form-group">
                  <label>Özet</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Detay</label>
                  <textarea name="detail" id="" class="form-control" rows="8">Detay:

İlave Bilgi:
* Paket Versiyonu(lar)
* Ayarlar ya da log dosyaları vesaire.

Hata oluşurken yapılan adımlar:
                  </textarea>

                </div>
              </div>
            </div>




            <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
          </form>

        </div>
      </div>


    </div>
  </div>
</div>

<?php import::view(THEMA_NAME.'assets/footer'); ?>