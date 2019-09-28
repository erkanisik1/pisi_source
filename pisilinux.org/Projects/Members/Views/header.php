<?php if (!Session::select('username')) {redirect(URL::base('uye'));} ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php //echo ayar()->ayar_title; ?></title>
        
        <!-- Bootstrap Styles-->
        <link href="/<?php echo THEMES_DIR ?>members/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="/<?php echo THEMES_DIR ?>members/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->
        <link href="/<?php echo THEMES_DIR ?>members/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="/<?php echo THEMES_DIR ?>members/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>members/js/Lightweight-Chart/cssCharts.css"> 
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=d6svnnvb45e83intvoi2vqxggihegsrd73eah9unxtrcz5r3"></script>

<?php 
import::view('editor');
 ?> 
</head>
        

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/members"><strong>pisilinux</strong></a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <!-- 
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Yönetim</strong>
                                        <span class="pull-right text-muted">
                                            <em>Bugün</em>
                                        </span>
                                    </div>
                                    <div>Sistem Test mesajıdır dikkate almayın...</div>
                                </a>
                            </li>
                            <li class="divider"></li>

                            <li>
                                <a class="text-center" href="#">
                                    <strong>Bütün mesajlar</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        
                    </li>
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Görev1</strong>
                                            <span class="pull-right text-muted">60% Tamamlandı</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% tamamlandı (Başarılı)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>

                            <li>
                                <a class="text-center" href="#">
                                    <strong>Tüm Görevler</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                       
                    </li>
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Mesaj Gönder
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> Yeni Görev
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>

                        </ul>
                       
                    </li> -->
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <!-- 
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profilim</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Profil Ayarları</a>
                            </li>
                             -->
                            <li class="divider"></li>
                            <li><a href="<?php echo URL::base('members/user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Çıkış</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            

            <?php 
           import::view('sidebarmenu'); ?>

            <div id="page-wrapper">
              <div class="header"> 
                <h4 class="page-header">Merhaba <?php  echo Session::select('username') ?>
             </h4>



         </div>
         <div id="page-inner">