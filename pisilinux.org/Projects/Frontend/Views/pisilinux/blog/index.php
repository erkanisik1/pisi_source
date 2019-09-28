<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-9">                 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pisilinux BLOG</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards row-deck">

                            <?php foreach (blog() as $key): ?>
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-column">
                                        <img src="<?php echo content_image($key->content) ?>" alt="">
                                        <br>
                                        <h4><a href="<?php echo URL::base('blog/'.$key->id.'-'.$key->title_seo.'.html'); ?>"><?php echo $key->title; ?></a></h4>
                                        <div class="text-muted">
                                            
                                            <?php echo kelimebol($key->content,200); ?>
                                                
                                        </div>
                                        
                                        <div class="d-flex align-items-center pt-5 mt-auto">
                                            <div class="avatar avatar-md mr-3" style="background-image: url(<?php echo URL::base(avatar($key->editor)); ?>)"></div>
                                            <div>
                                                <a href="./profile.html" class="text-default"><?php echo editor($key->editor); ?></a>
                                                <small class="d-block text-muted"><?php echo tcevir($key->create_date); ?></small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <?php endforeach ?>
                            
                        
                            

                        </div>
                    </div>
                </div>
            </div>

      <?php import::view(THEMA_NAME.'blog/right'); ?>
        </div>
    </div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>