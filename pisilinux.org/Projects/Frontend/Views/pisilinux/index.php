<?php import::view(THEMA_NAME.'assets/header.php'); ?>
   

      <div class="my-3 my-md-5">
        <div class="container">
       <?php require('slider.php'); ?>
          <div class="col-md-12">
            <div class="card-body text-center">
              <h3 class="mb-3"><?php echo translate('welcometopisilinux'); ?></h3>
              <p class="mb-4">
                Pisi Linux, özgür yazılım topluluğu tarafından geliştirilen, son kullanıcı odaklı bir GNU/Linux dağıtımıdır.
              </p>
            </div>
          </div>
<hr> 
<h2>Wiki Güncel</h2>
            <!--Blog -->
          <div class="row row-cards">
            <div class="page-header"></div><div class="page-header"></div>
            <?php foreach (wikicontent() as $key): ?>

            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                 <a href="<?php echo '/wiki/cont/'.$key->id.'-'.$key->baslik_seo.'.html'; ?>">
                <div class="card-header" style="background-image: url(<?php echo content_image($key->detay); ?>);"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3"><?php echo $key->baslik; ?></h3>
                  <p class="mb-4"><?php echo kelimebol($key->detay,200); ?>
                  </p>
                </div>
         </a>
              </div>
            </div>
          <?php endforeach ?>
          </div>  
          <!--blog end -->

<hr>
<h2>Blog Güncel</h2>
            <!--Blog -->
          <div class="row row-cards">
            <div class="page-header"></div><div class="page-header"></div>
            <?php foreach ($content as $key): ?>

            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                 <a href="<?php echo '/blog/'.$key->id.'-'.$key->title_seo.'.html'; ?>">
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

<hr>

          <!--özellikler-->
          <div class="row row-cards">
            <div class="page-header"></div><div class="page-header"></div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url('/upload/tech.jpg');"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3">Son Teknolojiyi Kullanır.</h3>
                  <p class="mb-4">
                    Mevcut paketlerin en son kararlı sürümlerini bulundurur. Türkçe’yi tam ve doğru olarak kullanır. Yazım ve kelime denetimleri yaparak sizin doğru, düzgün ve güzel bir Türkçe kullanmanızı sağlar.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url('/upload/fasteasy.jpg');"></div>
                <div class="card-body text-center" style="height: 213px;">
                  
                  <h3 class="mb-3">Hızlı ve kolay kurulur.</h3>
                  <p class="mb-4">Kurulum işlemi bir çok bilgisayarda hızlı kurulur size vakit kaybettirmez ve grafiksel ekran sayesinde kurulumu kolaylıkla yapabilirsiniz. Kurulumdan sonra ofis yazılımı, İnternet gezgini, sohbet programı gibi gerekli bütün programlar da yüklenir.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url('/upload/freecat.jpg');"></div>
                <div class="card-body text-center" style="height: 213px;">
                 
                  <h3 class="mb-3">Özgürdür.</h3>
                  <p class="mb-4">Özgürdür ve açık kaynaklıdır. Kodlarına istediğiniz gibi erişip istediğiniz değişikliği yapabilirsiniz. Virüs derdi yoktur. İnternet’ten indirdiğiniz dosyaları kontrol etmek ile uğraşmazsınız.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- pisi linux features start-->
          <div class="row row-cards">
            <div class="col-md-12">
              <div class="card-body text-center">
                <h3 class="mb-3">Pisi Linux Özellikleri</h3>
                <p class="mb-4">
                  Hızlı ve kararlı yapısıyla ve kullanıcı dostu Pisi Linux aileden biri gibidir. Kullandıkça seveceğiniz, vazgeçemeyeceğiniz ve gerçek Türkçe dil desteği olan tek dağıtımdır.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                  <h3 class="card-title">Tamdır</h3>
                  
                </div>
                <div class="card-body" height="100">
                  Pisi Linux’u kurduktan sonra geniş bir uygulama yelpazesi ile sizi karşılar. Depolada bulunan yüzlerce paketlerden birisi mutlaka işinizi görecektir. Ayrıca, donanımınızı kolaylıkla tanımaktadır. 
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                  <h3 class="card-title">Türkçe Sever</h3>
                  
                </div>
                <div class="card-body">
                  Pisi Linux ana dilimizi tamamıyla desteklemek için yoğun çaba gösterir. Depolardaki paketlerin Türkçe desteğine özen gösterir. Türkçe desteği vermeyen paketler için çeviri çalışmaları da yürütür. 
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-orange"></div>
                <div class="card-header">
                  <h3 class="card-title">Özelleştirilebilir</h3>
                  
                </div>
                <div class="card-body">
                  Pisi Linux'ta KDE ile gelen KAPTAN sayesinde aklınızın sınırlarını aşan sayıda sınırsız kombinasyon ile bilgisayarınızı özelleştirebilir. Siz hayal edin KAPTAN yapsın.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-orange"></div>
                <div class="card-header">
                  <h3 class="card-title">Kolaydır</h3>
                  
                </div>
                <div class="card-body">
                  Pisi Linux'u kullanmak, hiç ummadağınız kadar kolay! Size sunulan ile yetinmeyin, hayal edebildiğiniz kadar geliştirin, kolaylıkla kullanın!
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                  <h3 class="card-title">Hızlı ve Kolay Kurulur</h3>
                  
                </div>
                <div class="card-body">
                  Hiç olmadığı kadar kısa sürede kurulumunu yapabilir. Kurulum sonrası sürücü kurmak ile uğraşmaz, bilgisayarınızın keyfinizi sürersiniz.
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                  <h3 class="card-title">Virüslere Geçit Vermez</h3>
                  
                </div>
                <div class="card-body">
                  Virüsler ile başınız belada mı? Pisi Linux, linux alt yapısından aldığı güçle, Pisi Linux'da virüslerin sistemi bozmasına asla izin vermez. 
                </div>
              </div>
            </div>
          </div>
          <!-- pisi linux features end-->

          <!--blog start -->
          <div class="card-body text-center">
                <h3 class="mb-3">Pisi Linux Blog</h3>
                <p class="mb-4">
                  Bloğumuza sizler için eklediğimiz ve yararlı olacağını umduğumuz yazılarımız...
                </p>
              </div>


        

          <!-- pisi linux hakkımızda start-->
          <div class="row row-cards">
            <div class="col-md-12">
              <div class="card-body text-center">
                <h3 class="mb-3">Hakkımızda</h3>
                <p class="mb-4">
                  Pisi Linux, Pisi tabanlı, özgür yazılım topluluğu tarafından geliştirilen, bilgisayar kulanıcılarına kurulum, yapılandırma ve kullanım konusunda kolaylık sağlamaya çalışan, onların temel masaüstü gereksinimlerini karşılamayı amaçlayan, son kullanıcı odaklı bir GNU/Linux dağıtımıdır.
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