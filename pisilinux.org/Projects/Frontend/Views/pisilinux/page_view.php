<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-12">                 
                <div class="card">
                    <div class="card-header">
                       <h1><?php echo $content->title; ?></h1>
                   </div>

                   <div class="card-body">
                      <div class="text-muted">                  
                        <?php echo decode($content->content); ?>
                    </div>
                 


                    <div class="d-flex align-items-center mt-auto">
                        <!--  
                        <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/4.jpg)"></div>
                        <div>
                             <a href="#" class="text-default"><?php echo editor($content->editor); ?></a> / <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo tcevir($content->create_date);?> / <i class="fa fa-eye" aria-hidden="true"></i> <?php echo$content->hits; ?>
                        </div>
                       -->
                    </div>


                </div>
            </div>
        </div>
      
    </div>
</div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>