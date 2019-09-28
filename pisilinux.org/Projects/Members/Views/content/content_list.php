<?php import::view('header'); ?>



<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">Yazılarım
       <div class="pull-right" style="margin:-6px;"><a href="/members/content/new_content"><button class="btn btn-default"> + İÇERİK EKLE</button></a></div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
           <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>            
                    <th>Tarih</th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach (user_content_list(session::select('userid')) as $key): ?>
                     <tr>
                    <td></td>
                    <td><?php echo tcevir($key->create_date); ?></td>
                    <td><?php echo $key->title; ?></td>
                    <td><?php echo category_name($key->category_id); ?></td>
                    <td><?php echo $key->status; ?></td>
                    <td>
                      <a href="/members/content/edit/<?php echo $key->id; ?>"><button alt="Düzenle"><i class="glyphicon glyphicon-pencil"></i></button></a>
                      <button class="btn-danger" id="delete" data-id="<?php echo $key->id; ?>" alt="Sil"><i class="glyphicon glyphicon-remove"></i></button></a>
                    </td>
                  </tr>                    
                  <?php endforeach ?>
                 
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php import::view('footer'); ?>