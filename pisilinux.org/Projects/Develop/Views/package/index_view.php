<?php import::view('header') ?>
      
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			Developer Kullanıcı listesi
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="package">
					<thead>
						<tr>
							<th>#</th>
							<th>Paket Adı</th>
							<th>Açıklaması</th>
							<th>repo</th>
							<th width="70">İşlemler</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($lists as $key ): ?>
							<tr class="odd gradeX">
								<td><?php echo $key->id; ?></td>
								<td><?php echo $key->adi; ?></td>
								<td><?php echo $key->aciklama; ?></td>
								<td>
									<button class="btn"><i class="fa fa-eye-slash" aria-hidden="true"></i></i></button>
									<button class="btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

				
			
	<?php import::view('footer') ?>		
		
	