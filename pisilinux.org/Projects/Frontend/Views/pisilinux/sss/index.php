<?php import::view(THEMA_NAME.'assets/header'); ?><br>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-12">                 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pisilinux Sık Sorulan Sorular</h3>
                    </div>
                    <div class="card-body">
	<div class="accordion" id="accordionExample">
<?php $a = '';  foreach ($liste as $key):  $a=(int)$a+1; ?>
	  <div class="card" style="margin-bottom: 0px;">
    <div class="card-header" data-toggle="collapse" data-target="#collapse<?php echo $a ?>" aria-expanded="true" style="cursor: pointer;" >
      
        
          <i class="far fa-hand-point-right" style="font-size: 2em; padding-right: 0.2em;"></i> <?php echo strtoupper($key->question); ?>
        
      
    </div>

    <div id="collapse<?php echo $a ?>" class="collapse" data-parent="#accordionExample">
      <div class="card-body">
        <?php echo $key->answer; ?>
      </div>
    </div>
  </div>
<?php endforeach ?>



</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php import::view(THEMA_NAME.'assets/footer'); ?>