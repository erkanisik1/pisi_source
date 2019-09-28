<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-9">                 
                <div class="card">
                    <div class="card-header">
                       <h4><?php echo $content->baslik; ?></h4>
                   </div>

                   <div class="card-body">
                      <div class="text-muted">                  
                        <?php echo $content->detay; ?>
                    </div>
                    <hr>

                      <div class="d-flex align-items-center mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(<?php echo URL::base(avatar($content->editor)); ?>)"></div>
                        <div>
                            <a href="#" class="text-default"><?php echo editor($content->editor); ?></a> / <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo tcevir($content->zaman);?> / <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $content->hits; ?>
                            
                        </div>



                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- sağ taraf -->
        <div class="col-lg-3">
        <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">WIKI Kategorileri</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <?php foreach (wiki_kategoriler('30') as $key): ?>
                                 <li class="nav-item">
                                <a class="nav-link active" href="<?php echo URL::base('wiki/cat/'.$key->id.'-'.$key->adi_seo.'.html'); ?>"><?php echo $key->adi; ?></a>
                            </li>
                            <?php endforeach ?>
                         
                        </ul>
                    </div>
                </div>

            <div class="card">
                <div class="card-body">
                    <a href="https://goo.gl/EWMG1i" target="_blank">
                        <img src="<?php echo URL::base('img/sponsor/cloud-server-turhost-banner-350x250px.png') ?>" alt="cloud server turhost banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>