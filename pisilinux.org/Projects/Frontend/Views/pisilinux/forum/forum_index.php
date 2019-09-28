<?php import::view(THEMA_NAME.'assets/header');  ?>
<br>
<style>
	.altforum{
		border: 1px solid #c6e1ff;
		padding: 2px;
	}

	.altforum:hover{
		border: 1px solid #c6e1ff;
		padding: 2px;
		background: #a6d0ff;
		color:#000;
	}
	.card-title p{
		font-size: 0.8em;
	}
</style>
<div class="container">
	<?php foreach (forum_kategori_panel() as $key): ?>
		
<div class="col-md-12 col-xl-12 shadow">
	<div class="card">
		<div class="card-status bg-red"></div>
		<div class="card-header">
			<h3 class="card-title"><?php echo $key->adi; ?><br><p><?php echo $key->aciklama; ?></p></h3>			
		</div>
		<div class="card-body" style="margin: 0px; padding: 0px;">

			<table class="table table-bordered">
					<?php foreach (forum_kategori_panel($key->id) as $key1): ?>
						<tr>
					<td width="66"><img src="<?php echo Url::base('upload/pisilinux_pisi.png') ?>" alt="pisi logo" width="64"></td>
					<td style="border-left: solid 1px #ccc;border-right: solid 1px #ccc">
						<a href="/forum/forums/<?php echo $key1->id.'-'.$key1->adi_seo; ?>"><?php echo $key1->adi; ?></a>
						<p><?php echo $key1->aciklama; ?></p>


					</td>
					<td class="text-center" width="60">Konular <br><?php echo mesaj_sayisi($key1->id); ?></td>
					<td class="text-center" width="60">Mesajlar <br>0</td>
				</tr>
    			 
    		<?php endforeach ?>	
				
			</table>
			
		</div>
	
	</div>
</div>
	<?php endforeach ?>
</div>

<?php import::view(THEMA_NAME.'assets/footer');  ?>
