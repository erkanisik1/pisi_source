<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-9">                 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pisilinux WIKI [ <?php echo wiki_category_name($kategori_name); ?> ]</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards row-deck">

                            <?php foreach ($wikikat as $key): ?>

                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-column">
                                        <img src="<?php echo content_image($key->detay) ?>" alt="">
                                        <h4><a href="/wiki/cont/<?php echo $key->id.'-'.$key->baslik_seo.'.html' ?>"><?php echo $key->baslik; ?></a></h4>
                                         
                                        
                                        <div class="text-muted">
                                        <?php echo kelimebol($key->detay,200); ?>
                                            
                                                
                                        </div>
                                        
                                
                                    </div>
                                </div>
                            </div>
                                
                            <?php endforeach ?>
                            
                        
                            

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
                        <a href="https://www.turhost.com/sunucu/dedicated-server" target="_blank">
                            <img src="/img/sponsor/cloud-server-turhost-banner-350x250px.png" alt="cloud server turhost banner">
                        </a>
                        
                    </div>
                </div>



            </div>
        </div>
    </div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>