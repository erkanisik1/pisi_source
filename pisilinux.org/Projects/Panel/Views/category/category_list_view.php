<?php import::view('header'); ?>
<h1>KATEGORİLER</h1><hr>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
      <h5>KATEGORİLER</h5>
      <div class="pull-right" style="margin:5px;"><a href="/panel/category/new_category"><button>YENİ KATEGORİ</button> </a></div>
    </div>
   	<div class="widget-content nopadding">
     	<table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="85">İmage</th>
            <th>Kategoriler</th>
            <th>Açıklama</th>  
            <th width="80">İşlemler</th>
          </tr>
        </thead>
        <tbody>               
          <?php echo KategoriTablosu('kategori'); ?>
          
        </tbody>
      </table>
 	  </div>
  </div>
<?php import::view('footer'); ?> 