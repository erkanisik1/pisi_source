<?php import::view('header'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
      <h5>Sık Sorulan Sorular</h5>
          <div class="pull-right" style="margin:5px;"><a href="<?php echo URL::base('panel/sss/new');?>"><button>+ YENİ SORU </button> </a></div>

    </div>
      <div class="widget-content nopadding">
      	<table class="table table-bordered">
      		<thead>
      			<tr>
      				<th width="10">ID</th>
      				<th>Soru</th>
      				<th>Cevap</th>
      				<th width="120">İşlemler</th>
      			</tr>
      		</thead>
      		<tbody>
      			<?php foreach ($liste as $key ): ?>
      				<tr>
      				<td><?php echo $key->id ?></td>
      				<td><?php echo $key->question ?></td>
      				<td><?php echo $key->answer ?></td>
      				<td>
      					<a href="/panel/sss/delete/<?php echo $key->id ?>"><button class="btn btn-danger">sil</button></a> 
      					<a href="/panel/sss/edit/<?php echo $key->id ?>"><button class="btn">Düzenle</button></a>
      				</td>
      			</tr>
      			<?php endforeach ?>
      			
      		</tbody>
      	</table>
	
      	</div></div>

<?php import::view('footer'); ?>