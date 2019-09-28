	<?php import::view('header'); ?>

	<h1>MENÜ YÖNETİM SAYFASI</h1>
	1) <a href="#newmenu" data-toggle="modal" ><button class="btn">Yeni menü Adı Ekle</button></a><br>
	<hr>

	<form method="post">
	
	
	<div class="span2">
		<h3>Menü Adı</h3>
		
			2) <select name="menu_adi" id="menuname" class="span11">
				<option>Seçiniz...</option>
				<?php foreach ($menu as $key ): ?>
					<option value="<?php echo $key->id.'&'.$key->menuAdi; ?>"><?php echo $key->menuAdi; ?></option>
				<?php endforeach ?>
			</select>			
		</div><br>

		<div class="span4">

			3) Eklenecek içerik	<div id="accordion">
				<h3>Yazılar</h3>
				<div>
					<?php foreach ($yazilar as $key ): ?>

						<label>
							<input type="radio" name="link" value="<?php echo 'blog/content/'.$key->icerik_id.'-'.$key->baslik_seo.'.html'; ?>" > <?php echo $key->icerik_baslik; ?>
						</label>
					<?php endforeach ?>

				</div>

				<h3>Sayfalar</h3>
				<div>
					<?php foreach ($sayfalar as $key ): ?>

						<label>
							<input type="radio" name="link" value="<?php echo '/page/'.$key->icerik_id.'-'.$key->baslik_seo.'.html'; ?>" > <?php echo $key->icerik_baslik; ?>
						</label>
					<?php endforeach ?>
				</div>

				<h3>Kategoriler</h3>
				<div>
					<?php foreach ($kategoriler as $key ): ?>

						<label>
							<input type="radio" name="link" value="<?php echo 'blog/cat/'.$key->id.'-'.$key->adi_seo.'.html'; ?>" > <?php echo $key->adi; ?>
						</label>
					<?php endforeach ?>

				</div>

				<h3>Harici Link</h3>
				<div>
					<input type="text" name="link1" class="span11" >
				</div>
			</div>

		</div>
		<div class="span4">
			<h3>Başlık</h3>
			<input type="text" name="baslik" class="span11">
			<input type="hidden" name="islem" value="2">
			<input type="submit" name="" value="Kaydet" class="span11">
		</div>		
	</form>
	<hr>
	<div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>

            <h5>Menüler</h5>

          </div>

          <div class="widget-content nopadding">

            <table class="table table-bordered table-striped">

              <thead>

                <tr>

                  <th>Menu Adı</th>

                  <th>Başlık</th>

                  <th>link</th>

                  <th>İşlemler</th>

                </tr>

              </thead>

              <tbody>
              	<?php foreach ($menulist as $key): ?>
              		<tr class="odd gradeX">

                  <td><?php echo $key->menu_adi ?></td>

                  <td><?php echo $key->title ?></td>

                  <td><?php echo $key->link ?></td>


                  <td class="center">X</td>

                </tr>

              		
              	<?php endforeach ?>

             
              

              </tbody>

            </table>

          </div>

        </div>


<!-- popup menuname -->
<div id="newmenu" class="modal hide" aria-hidden="true" style="display: none;">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Menü Adı Ekle</h3>
	</div>

	<div class="modal-body">
		<form method="post">
			<div class="control-group">
				<label class="control-label">Menu Adı:</label>
				<div class="controls">
					<input type="text" class="span5" name="menuname" placeholder="Yeni menü adını yazın...">
					<input type="hidden" name="islem" value="1">
					<button type="submit" class="btn btn-success btn-block">Menü adını Kaydet</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- /popup menuname -->
<?php import::view('footer'); ?>