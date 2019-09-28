<?php import::view('header') ?>

<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			Developer Kullanıcı listesi
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables">
					<thead>
						<tr>
							<th>#</th>
							<th>Kullanıcı adı</th>
							<th>Kullanıcı E-Posta</th>
							<th width="70">İşlemler</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($lists as $key ): ?>
							<tr class="odd gradeX">
								<td><?php echo $key->user_id; ?></td>
								<td><?php echo $key->username; ?></td>
								<td><?php echo $key->mail; ?></td>
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

<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			Çiftlik Kullanıcı listesi
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="ciftlikdata">
					<thead>
						<tr>
							<th>#</th>
							<th>Kullanıcı adı</th>
							<th>Kullanıcı E-Posta</th>
							<th width="70">İşlemler</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($ciftlik as $key ): ?>
							<tr class="odd gradeX">
								<td><?php echo $key->user_id; ?></td>
								<td><?php echo $key->user_name; ?></td>
								<td><?php echo $key->user_email; ?></td>
								<td>
									<button class="btn"><i class="fa fa-eye-slash" aria-hidden="true"></i></i></button>
									<button class="btn"><i class="fa fa-trash" aria-hidden="true"></i></button>


								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<?php import::view('footer') ?>		