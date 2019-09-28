<?php loginControl(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php //echo Myfunc::setting()->ayar_title; ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <?php $d = date('dmYHis'); ?>
 
<link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/bootstrap.min.css" />
<link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/matrix-style.css" />
<link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/matrix-media.css" />
<?php import::style('awesome','google','sweetAlert'); ?>
<link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/my.css?v=<?php echo $d ?>" />


</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo URL::base(); ?>"><?php echo setting()->ayar_title; ?></a></h1>
</div>
<!--close-Header-part--> 
<?php 
	IMPORT::view('navbar'); 
  	Import::view('sidebarmenu'); 
?><div id="content">
<div id="content-header"> 
  <div id="breadcrumb"> </div>
</div>
<div class="container-fluid">
	<div class="row-fluid">

