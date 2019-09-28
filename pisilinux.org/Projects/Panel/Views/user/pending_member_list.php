<?php import::view('header'); ?>
<div class="span12">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Onay bekleyen Üyeler</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered data-table" id="pending_member">
        <thead>
          <tr>
            <th>#</th>
            <th width="100">KAYIT TARİHİ</th>
            <th width="50">AVATAR</th>
            <th>ÜYE ADI</th>
            <th>MAİL ADRESİ</th>
            <th>AKTİVİZASYON KODU <br>( Kodu tekrar göndermek için kodun üstüne tıklayın ) </th>
            <th width="100">İŞLEMLER</th> 
          </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          <?php foreach ($pending_member as $key): ?>
            <tr cclass="gradeA odd">
              <td><?php echo $key->user_id; ?></td>
              <td><?php echo tcevir($key->date); ?></td>
              <td><img src="<?php echo '../'.$key->avatar; ?>" alt="" width="50"></td>
              <td><?php echo $key->username; ?></td>
              <td><?php echo $key->mail; ?></td>
              <td><p class="active1" data-id="<?php echo $key->aktivizasyon; ?>" ><?php echo $key->aktivizasyon; ?></p></td>
              <td style="text-align: center">
                <a href="/panel/member/mail/<?php echo $key->user_id; ?> "><button><i class="fa fa-envelope"></i></button></a>
                <a href="/panel/member/edit/<?php echo $key->user_id; ?> "><button><i class="fa fa-edit"></i></button></a>
                <a href="/panel/member/delete/<?php echo $key->user_id; ?>" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                  <button><i class="fa fa-trash"></i></button>
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php import::view('footer'); ?>