<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <!-- sol taraf -->
            <div class="col-lg-9">                 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pisilinux WIKI</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards row-deck">

                            <?php foreach ($catlist as $key): ?>
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-column">
                                        <h4><a href="/wiki/cat/<?php echo $key->id.'-'.$key->adi_seo.'.html' ?>"><?php echo $key->adi; ?></a></h4>
                                         <div class="card-header">
                                             <img src="<?php echo URL::base($key->img); ?>" alt="">
                                         </div>
                                        <div class="text-muted">
                                        
                                            <?php echo $key->aciklama; ?>
                                                
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
                        <a href="https://www.turhost.com/sunucu/bulut-sunucu" target="_blank">
                            <img src="<?php echo URL::base('img/sponsor/cloud-server-turhost-banner-350x250px.png') ?>" alt="cloud server turhost banner">
                        </a>
                        
                    </div>
                </div>



            </div>
        </div>
    </div>  
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?>