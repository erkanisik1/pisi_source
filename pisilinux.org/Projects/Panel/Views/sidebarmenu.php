<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-home"></i> Yönetim Paneli</a>
  <ul>
    <li><a href="<?php echo URL::base('panel'); ?> "><i class="fa fa-home"></i> <span>Yönetim Paneli</span></a> </li>
    
    <li class="submenu"><a href="#"><i class="fa fa-file"></i> <span>İçerik Yönetimi</span></a> 
      <ul>
        <li><a href="<?php echo URL::base('panel/content'); ?>">Blog İçerik Listesi</a></li>
        <li><a href="<?php echo URL::base('panel/content/new_content'); ?>">Blog İçerik Ekle</a></li>  
        <li><a href="<?php echo URL::base('panel/category'); ?>">Blog Kategori Yönetimi</a></li>
        <li class="divider"></li>     
      </ul>
    </li>
    <li class="submenu"><a href="#"><i class="fa fa-file"></i>Forum Yönetimi</a>
      <ul>
        <li><a href="/panel/category/category_list">Kategori listesi</a></li>
      </ul>


    </li>

    <li class="submenu"><a href="#"><i class="fa fa-file"></i> <span>Wiki Yönetimi</span></a> 
      <ul>
        <li><a href="<?php echo URL::base('panel/wiki'); ?>">İçerik Listesi</a></li>
        <li><a href="<?php echo URL::base('panel/wiki/new_content'); ?>">İçerik Ekle</a></li>  
        <li><a href="<?php echo URL::base('panel/wiki/kategori'); ?>">Kategori Yönetimi</a></li>     
      </ul>
    </li>

    <li class="submenu"><a href="#"><i class="fa fa-file"></i> <span>SSS Yönetimi</span></a> 
      <ul>
        <li><a href="<?php echo URL::base('panel/sss'); ?>">SSS Listesi</a></li>
        <li><a href="<?php echo URL::base('panel/sss/new'); ?>">SSS Ekle</a></li>  
        <li><a href="<?php echo URL::base('panel/sss/category'); ?>">SSS Kategori Yönetimi</a></li>     
      </ul>
    </li>

    <li class="submenu"><a href="#"><i class="fa fa-user"></i> <span>Sayfa Yönetimi</span></a>
      <ul>
        <li><a href="<?php echo URL::base('panel/page'); ?>">Sayfa Listesi</a></li>
        <li><a href="<?php echo URL::base('panel/page/sayfaekle'); ?>">Sayfa Ekle</a></li>
      </ul>
    </li>

    <li><a href="<?php echo URL::base('panel/slayt'); ?>"><i class="fa fa-picture-o"></i>Slayt Yönetimi</a></li>
    <li class="submenu"><a href="#"><i class="fa fa-user"></i> <span>Üye Yönetimi</span></a>
      <ul>
        <li><a href="/panel/member">Aktif Üyeler</a></li>
        <li><a href="/panel/member/pending_member">Onay bekleyen üyeler</a></li>
        <li><a href="/panel/member/disable_member">Yasaklı Üyeler</a></li>
      </ul>

    </li>
    <li><a href="<?php echo URL::base('panel/indir'); ?>"><i class="fa fa-cog"></i>İndir</a></li>
    <li><a href="<?php echo URL::base('panel/setting'); ?>"><i class="fa fa-cog"></i>Site Ayarları</a></li>
    <li><a href="<?php echo URL::base('panel/menu'); ?>"><i class="fa fa-cog"></i>Menü Yönetimi</a></li>
    <li><a href="<?php echo URL::base('panel/iletisim'); ?>"><i class="fa fa-cog"></i>Site iletişim</a></li>
    <li><a href="<?php echo URL::base('panel/funclist'); ?>">Fonksiyon Listesi</a></li>
    <li><a href="<?php echo URL::base('panel/creator'); ?>">creator</a></li>
  </ul>
</div>
<!--sidebar-menu-->
