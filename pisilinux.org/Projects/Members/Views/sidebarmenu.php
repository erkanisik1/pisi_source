 <!--/. NAV TOP  -->
        
        <nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li><a href="/members"><i class="fa fa-dashboard"></i>Üye Anasayfa</a></li>
                    <li><a href="/"><i class="fa fa-dashboard"></i>Site Anasayfa</a></li>
                    <li><a href="/members/forum"><i class="fa fa-dashboard"></i>Forum</a></li>
                    <li><a href=""><i class="fa fa-user"></i> Profilim<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/members/user"><i class="fa fa-user"></i>Güncelle</a></li>
                            <li><a href="/members/user/passrename"><i class="fa fa-key"></i>Şifremi Değiştir</a></li>
                            <li><a href="/members/home/logout"><i class="fa fa-sign-out"></i>Çıkış</a></li>                      
                        </ul>
                    </li>  
                    <li><a href="/members/wiki"><i class="fa fa-bars"></i>Wiki Yöneticisi</a></li>
                    <?php if (Session::select('yetki') == '3' OR Session::select('yetki') == '1'): ?>
                        <li><a href="/members/content"><i class="fa fa-bars"></i>İçerik Yöneticisi</a></li>
                    
                    <?php endif ?>

                    
                    <li><a href="/members/user/logout"><i class="fa fa-sign-out"></i>Çıkış</a></li>
                   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->