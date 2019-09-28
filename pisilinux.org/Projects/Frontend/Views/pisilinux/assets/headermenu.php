<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav right">
      <li class="nav-item"> 
      <a href="/" class="nav-link"><i class="fe fe-home"></i> <?php echo translate('home'); ?></a>
    </li>
    <li class="nav-item">
      <a href="/page/43-hakkimizda.html" class="nav-link">
        <i class="fe fe-book"></i> <?php echo translate('about'); ?></a>
      </li>
       <li class="nav-item">
                    <a href="/iletisim" class="nav-link">
                      <i class="fe fe-mail"></i> <?php echo translate('contact'); ?></a>
                    </li>
    </ul></div>
 <!-- sosyal medya linkleri -->     
      <div style="padding-top: 10px;margin-left: 10px;">

      <a href="https://www.facebook.com/Pisilinux/" target="_blank">
        <i class="fab fa-facebook-square fa-2x btn-secondary"></i>
      </a>
      <a href="https://twitter.com/pisi_linux" target="_blank">
        <i class="fab fa-twitter-square fa-2x btn-secondary"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCLGSGLpxVE-vxzBuebBj3tA" target="_blank">
        <i class="fab fa-youtube-square fa-2x btn-secondary"></i>
      </a>
      <a href="https://www.linkedin.com/in/pisi-linux-33a5b6137" target="_blank">
        <i class="fab fa-linkedin-square fa-2x btn-secondary"></i>
      </a>
      <a href="https://www.instagram.com/pisilinux_official/" target="_blank">
        <i class="fab fa-instagram fa-2x btn-secondary"></i>
      </a>
      <a href="https://t.me/joinchat/MAcpp0o6E4dAAoz090cDjA" target="_blank" title="Pisilinux ekibinin buluşma noktası">
        <i class="fab fa-telegram fa-2x btn-secondary" ></i>
      </a>

      </div> 
      <!-- /sosyal medya linkleri -->

  </nav>
</div>
<div class="header py-4">
<style>
  .has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
</style>
  <div class="container">
    <div class="d-flex">

        <a class="header-brand" href="<?php echo URL::base(); ?>">
        <img src="<?php echo URL::base('upload/pisi-web-header1.png') ?>" class="header-brand-img" alt="Pisilinux logo">
      </a>
      <div class="d-flex order-lg-2 ml-auto" style="padding-top: 25px;">
        <form class="input-icon my-3 my-lg-0">
    
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Sitede ara...">
    <div class="input-group-append">
      <button class="btn btn-dark" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  <!-- 
          <input type="search" class="form-control header-search" placeholder="Ara&hellip;" tabindex="1">
          <div class="input-icon-addon">
            <i class="fe fe-search"></i> -->
        </form>
          
        <?php if(USERID){ ?>
          <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                 </a>
               </div>
          <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                  <span class="avatar" 
                  style="background-image: url(<?php echo URL::base(avatar(USERID)); ?>)" 
                  alt="<?php echo authority(USERID)->authority; ?>"></span>
                  <span class="ml-2 d-none d-lg-block">
                    <span class="text-default"><?php echo USERNAME; ?></span>
                    <small class="text-muted d-block mt-1"><?php echo authority(USERID)->authority; ?></small>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                  <a class="dropdown-item" href="/members">
                    <i class="dropdown-icon fe fe-user"></i> Panelim</a>
                    <!-- 
                  <a class="dropdown-item" href="/members/settings">
                    <i class="dropdown-icon fe fe-settings"></i> Ayarlarım</a>
                  <a class="dropdown-item" href="/members/inbox">
                    <span class="float-right"><span class="badge badge-primary">0</span></span>
                    <i class="dropdown-icon fe fe-mail"></i> Gelen Kutusu</a>
                  <a class="dropdown-item" href="/members/forum">
                    <i class="dropdown-icon fe fe-send"></i> Mesajlar</a>
                     -->
                  <div class="dropdown-divider"></div>
                 
                  <a class="dropdown-item" href="/member/logout">
                    <i class="dropdown-icon fe fe-log-out"></i> Çıkış</a>
                </div>
              </div>
      <?php } ?></div>
    </div>
    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
      <span class="header-toggler-icon"></span>
    </a>
  </div>
</div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">

     
      <?php import::view(THEMA_NAME.'assets/top_menu'); ?>
    </div>
  </div>
</div>