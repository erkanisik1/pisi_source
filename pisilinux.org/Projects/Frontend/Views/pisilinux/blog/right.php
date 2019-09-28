      <!-- sağ taraf -->
            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog Kategorileri</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <?php foreach (category() as $key): ?>
                                    <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL::base().'category/'.$key->id.'-'.$key->adi_seo ?>"><?php echo $key->adi ?></a>
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