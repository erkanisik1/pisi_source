
<!doctype html>
<html lang="en" dir="ltr">
<head>
  <title><?php if(defined('title')){echo title;}else{echo "Pisi Linux - Özgürlük Şimdi Başladı";}  ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="<?php echo LANG; ?>" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="description" content="<?php if(defined('desc')){echo desc;}else{echo ayar()->ayar_description;}  ?>">
  <meta name="ocs-site-verification" content="c766bdd990aafc2bac6f3801ef4a305a" />
  <meta name="keywords" content="<?php if(defined('keywords')){echo keywords;}else{echo ayar()->ayar_keywords;}  ?>" />
  <link rel="image_src" href="<?php if(defined('img')){echo img;}  ?>"/>

  <?php $d = rand(); ?>

  <meta name="author" content="Pisilinux Web Team">
  <link rel="icon" href="/img/fav/favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="/img/fav/favicon.ico">
  
  <link rel="apple-touch-icon" sizes="180x180" href="/img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/fav/favicon-16x16.png">
  <link rel="manifest" href="/img/fav/site.webmanifest">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>pisilinux/css/My.css?v=<?php echo $d; ?>">
  <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>pisilinux/css/dashboard.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5452304-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-5452304-13');
</script>

</head>
<body>
  <div class="page">
    <div class="page-main">
      <?php import::view(THEMA_NAME.'assets/headermenu'); ?>