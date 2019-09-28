<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li><a href=""><i class="fa fa-user"></i> Profilim<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="/develop/user"><i class="fa fa-user"></i>Güncelle</a></li>
                    <li><a href="/develop/user/passrename"><i class="fa fa-key"></i>Şifremi Değiştir</a></li>
                             
                </ul>
            </li>  
            <li><a href=""><i class="fa fa-dashboard"></i>Üye Yönetimi<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level collapse">
                    <li><a href="/develop/user/list"><i class="fa fa-user"></i>Üye Listesi</a></li>
                    <li><a href="/develop/user/new"><i class="fa fa-key"></i>Üye Ekle</a></li>
                             
                </ul>
            </li>
            <li><a href="<?php echo Url::base() ?>" target="_blank"><i class="fa fa-dashboard"></i>Site Anasayfa</a></li>
             <li><a href="/develop/package"><i class="fa fa-dashboard"></i>Paketler</a></li>
            <li><a href="/develop/user/logout"><i class="fa fa-sign-out"></i>Çıkış</a></li>
        </ul>
    </div>
</nav>
<!-- /. NAV SIDE  -->