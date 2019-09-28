<?php import::view(THEMA_NAME.'assets/header.php'); ?>
   

      <div class="my-3 my-md-5">
        <div class="container">
       <?php require('slider.php'); ?>
          <div class="col-md-12">
            <div class="card-body text-center">
              <h3 class="mb-3"><?php echo translate('welcometopisilinux'); ?></h3>
              <p class="mb-4">
                Pisi Linux, developed by the free software community, with a focus on end-users of GNU / Linux distribution.
              </p>
            </div>
          </div>

          <!--özellikler-->
          <div class="row row-cards">
            <div class="page-header"></div><div class="page-header"></div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url('<?php echo URL::base('upload/tech.jpg') ?>');"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3">Latest Technology Uses.</h3>
                  <p class="mb-4">
                    It will contain the latest stable version of the available packages. Use Turkish as complete and accurate. By spelling and vocabulary controls your right, it allows you to use a smooth and beautiful Turkish.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url(<?php echo URL::base('upload/fasteasy.jpg') ?>);"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3">Quick And Easy To Install.</h3>
                  <p class="mb-4">Set in a very fast computer setup process, you will not lose time, and you can easily setup through a graphical display. After installation, office software, Internet browser, such as chat programs all necessary programs will be installed
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url(<?php echo URL::base('upload/freecat.jpg') ?>);"></div>
                <div class="card-body text-center" style="height: 213px;">
                 
                  <h3 class="mb-3">It Is Free.</h3>
                  <p class="mb-4">It is free and is open source. as you want to, you can access and code changes you want. The virus is not a problem. There's no need to check the files you download from the Internet.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- pisi linux features start-->
          <div class="row row-cards">
            <div class="col-md-12">
              <div class="card-body text-center">
                <h3 class="mb-3">Pisi Linux Features</h3>
                <p class="mb-4">
                  Pisi Linux is like ones of yours family with fast and stable structure and user-friendly. Loved you use it, and not give up is the only distribution that supports real-Turkish languages.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                  <h3 class="card-title">IT IS FULL</h3>
                  
                </div>
                <div class="card-body" height="100">
                 Pisi Linux welcomes you with a wide range of applications after installing. One of hundreds of packages in the store will surely see your work. There is also easily recognize your hardware.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                  <h3 class="card-title">Turkish Shepherd</h3>
                  
                </div>
                <div class="card-body">
                  Pisi Linux shows intense efforts to support fully our native language. the packages in the repositories of utmost importance to Turkish support. He carries out the translation work for packets that do not support Turkish.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-orange"></div>
                <div class="card-header">
                  <h3 class="card-title">Customizable</h3>
                  
                </div>
                <div class="card-body">
                 You can customize your computer with an unlimited number of combinations which exceed the limits of your mind thanks Pisilinux CAPTAIN with KDE. You imagine, CAPTAIN do.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-orange"></div>
                <div class="card-header">
                  <h3 class="card-title">It Is Easy</h3>
                  
                </div>
                <div class="card-body">
                  Pisi Linux use, never as easy as you ummadag! Do not settle with being offered to you, as you can imagine, develop, use easily!
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                  <h3 class="card-title">Fast And Easy Installation</h3>
                  
                </div>
                <div class="card-body">
                  It can make the installation as quickly as never before. After installation, the driver does not deal with set up, you can enjoy your time on your computer.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                  <h3 class="card-title">Gateway Stops Viruses</h3>
                  
                </div>
                <div class="card-body">
                  Have you deal with viruses in trouble? Pisi Linux, the power it gets from the lower supposed to do, never let it get Pisi Linux viruses in your system.
                </div>
              </div>
            </div>
          </div>
          <!-- pisi linux features end-->

          <!--blog start -->
          <div class="card-body text-center">
                <h3 class="mb-3">Pisi Linux Blog</h3>
                <p class="mb-4">
                 We add our blog for you and we hope our article will be useful ...
                </p>
              </div>


          <!--Blog -->
          <div class="row row-cards">
            <div class="page-header"></div><div class="page-header"></div>
            <?php foreach ($content as $key): ?>

            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                 <a href="<?php echo URL::base('blog/'.$key->id.'-'.$key->title_seo.'.html'); ?>">
                <div class="card-header" style="background-image: url(<?php echo content_image($key->content); ?>);"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3"><?php echo $key->title; ?></h3>
                  <p class="mb-4"><?php echo kelimebol($key->content,200); ?>
                  </p>
                </div>
         </a>
              </div>
            </div>
          <?php endforeach ?>
          </div>

  
          <!--blog end -->
          <!-- pisi linux hakkımızda start-->
          <div class="row row-cards">
            <div class="col-md-12">
              <div class="card-body text-center">
                <h3 class="mb-3">About Us</h3>
                <p class="mb-4">
                  Pisi Linux, pisi-based, free, developed by the software community, the setup of the computer users, who are trying to ease in configuration and operation, aimed at meeting their basic desktop requirements, end-user focused on a GNU/Linux distribution.
                </p>
              </div>
            </div>
          </div>
          <!-- pisi linux hakkımızda end-->

          <!--Galeri start -->
          <!--  
          <h4 class="page-title">Gallery</h4>
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/grant-ritchie-338179-500.jpg" alt="Photo by Nathan Guerrero" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/male/41.jpg)"></div>
                <div>
                  <div>Nathan Guerrero</div>
                  <small class="d-block text-muted">12 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/ilnur-kalimullin-218996-500.jpg" alt="Photo by Alice Mason" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/female/1.jpg)"></div>
                <div>
                  <div>Alice Mason</div>
                  <small class="d-block text-muted">12 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 70</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 0</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/jakob-owens-224352-500.jpg" alt="Photo by Rose Bradley" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/female/18.jpg)"></div>
                <div>
                  <div>Rose Bradley</div>
                  <small class="d-block text-muted">4 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 166</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 96</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/jeremy-bishop-330225-500.jpg" alt="Photo by Peter Richards" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/male/16.jpg)"></div>
                <div>
                  <div>Peter Richards</div>
                  <small class="d-block text-muted">18 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 76</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 6</a>
                </div>
              </div>
            </div>
          </div>
          -->
          <!--Galeri end -->

         


          <!-- table -->
  <!-- 
          <div class="page-header"></div>
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Son Forum Konuları</h4>
                </div>
                <table class="table card-table">
                  <tr>
                    <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                    <td>Google Chrome</td>
                    <td class="text-right"><span class="text-muted">23%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-firefox text-muted"></i></td>
                    <td>Mozila Firefox</td>
                    <td class="text-right"><span class="text-muted">15%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-safari text-muted"></i></td>
                    <td>Apple Safari</td>
                    <td class="text-right"><span class="text-muted">7%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-internet-explorer text-muted"></i></td>
                    <td>Internet Explorer</td>
                    <td class="text-right"><span class="text-muted">9%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-opera text-muted"></i></td>
                    <td>Opera mini</td>
                    <td class="text-right"><span class="text-muted">23%</span></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-edge text-muted"></i></td>
                    <td>Microsoft edge</td>
                    <td class="text-right"><span class="text-muted">9%</span></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title">Wiki Konuları</h2>
                </div>
                <table class="table card-table">
                  <tr>
                    <td>Admin Template</td>
                    <td class="text-right">
                      <span class="badge badge-default">65%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Landing Page</td>
                    <td class="text-right">
                      <span class="badge badge-success">Finished</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Backend UI</td>
                    <td class="text-right">
                      <span class="badge badge-danger">Rejected</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Personal Blog</td>
                    <td class="text-right">
                      <span class="badge badge-default">40%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>E-mail Templates</td>
                    <td class="text-right">
                      <span class="badge badge-default">13%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Corporate Website</td>
                    <td class="text-right">
                      <span class="badge badge-warning">Pending</span>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title">Son Hata Kayıtları</h2>
                </div>
                <table class="table card-table">
                  <tr>
                    <td>Admin Template</td>
                    <td class="text-right">
                      <span class="badge badge-default">65%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Landing Page</td>
                    <td class="text-right">
                      <span class="badge badge-success">Finished</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Backend UI</td>
                    <td class="text-right">
                      <span class="badge badge-danger">Rejected</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Personal Blog</td>
                    <td class="text-right">
                      <span class="badge badge-default">40%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>E-mail Templates</td>
                    <td class="text-right">
                      <span class="badge badge-default">13%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Corporate Website</td>
                    <td class="text-right">
                      <span class="badge badge-warning">Pending</span>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        -->   
          <!--table end -->

          <!--video start -->
<!-- 
          <h4 class="page-title">Video</h4>
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/grant-ritchie-338179-500.jpg" alt="Photo by Nathan Guerrero" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/male/41.jpg)"></div>
                <div>
                  <div>Nathan Guerrero</div>
                  <small class="d-block text-muted">12 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/ilnur-kalimullin-218996-500.jpg" alt="Photo by Alice Mason" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/female/1.jpg)"></div>
                <div>
                  <div>Alice Mason</div>
                  <small class="d-block text-muted">12 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 70</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 0</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/jakob-owens-224352-500.jpg" alt="Photo by Rose Bradley" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/female/18.jpg)"></div>
                <div>
                  <div>Rose Bradley</div>
                  <small class="d-block text-muted">4 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 166</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 96</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="javascript:void(0)" class="mb-3">
                <img src="./demo/photos/jeremy-bishop-330225-500.jpg" alt="Photo by Peter Richards" class="rounded">
              </a>
              <div class="d-flex align-items-center px-2">
                <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/male/16.jpg)"></div>
                <div>
                  <div>Peter Richards</div>
                  <small class="d-block text-muted">18 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 76</a>
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 6</a>
                </div>
              </div>
            </div>
          </div>
 -->
          <!--video end -->
        </div>
      </div>
<!-- 
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
            </div>
          </div>
        </div>
      </div>
 -->
<?php import::view(THEMA_NAME.'assets/footer'); ?>