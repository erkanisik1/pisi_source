<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-9">                 
                <div class="card">
                    <div class="card-header">
                       <h4><?php echo $content->title; ?></h4>
                   </div>

                   <div class="card-body">
                      <div class="text-muted">                  
                        <?php echo $content->content; ?>
                    </div>
                    <hr>


                    <div class="d-flex align-items-center mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(<?php echo URL::base(avatar($content->editor)); ?>)"></div>
                        <div>
                            <a href="#" class="text-default"><?php echo editor($content->editor); ?></a> / <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo tcevir($content->create_date);?> / <i class="fa fa-eye" aria-hidden="true"></i> <?php echo$content->hits; ?>
                            
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
   <?php import::view(THEMA_NAME.'blog/right'); ?>
    </div>
</div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>