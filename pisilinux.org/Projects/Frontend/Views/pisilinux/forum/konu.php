<?php 
	import::view(THEMA_NAME.'assets/header'); 
 	if (avatar($fk->user_id)){ 
 		$avatar = URL::base(avatar($fk->user_id));  
 	}else{ 
 		$avatar = URL::base('img/user.png'); 
 	} 
 ?>
      <div class="my-3 my-md-5">
          <div class="container">
            <div class="row">

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                  	<h5>SORU: <?php echo $fk->title; ?></h5>
                 
                  </div>

                  <ul class="list-group card-list-group">
                    <li class="list-group-item py-5">
                      <div class="media">
                        <div class="media-object avatar avatar-md mr-4" style="background-image: url(<?php echo $avatar; ?>)"></div>
                        <div class="media-body">
                          <div class="media-heading">
                            <small class="float-right text-muted"><?php echo tcevir($fk->insertDate,1); ?></small>
                            <h5><?php echo yazar($fk->user_id); ?></h5>
                          </div>
                          <div>
                            <?php echo $fk->content; ?>
                            <?php if (session::select('userid') == $fk->user_id OR session::select('yetki')=='1'){ ?>
                               <div class="text-right">
                  <p class="d-inline">[  
                    <a href="/members/forum/edit/<?php echo $fk->id ?>">Düzenle</a> ] [ 
                    <a href="/members/forum/delete/<?php echo $fk->id ?>" onclick="return confirm('Mesajı silmek istediğinize eminmisiniz?')" >Sil</a> ] </p>
              </div>
                            <?php } ?>
                          </div>
                          
                        </div>
                      </div>
                    </li>
                   
                  </ul>

                  <!-- cevaplar -->
                 <?php 
                 	foreach (cevaplist($fk->id) as $key): 
                 	  if (avatar($key->user_id)){$avatar1 = URL::base(avatar($key->user_id));}else{$avatar1 = URL::base('img/user.png');} 
                 ?>
                 <ul class="list-group card-list-group ">
                    <li class="list-group-item py-5 " style="margin-bottom: 3px;background:#e2e2e2;">
                      <div class="media">
                        <div class="media-object avatar avatar-md mr-4" style="background-image: url(<?php echo $avatar1 ?>)"></div>
                        <div class="media-body">
                          <div class="media-heading">
                            <small class="float-right text-muted"><?php echo tcevir($key->insertDate,1); ?></small>
                            <h5><?php echo yazar($key->user_id); ?></h5>
                          </div>
                          <div>
                            <?php echo $key->content; ?>
                            <?php if (session::select('userid') == $key->user_id OR session::select('yetki')=='1'){ ?>
                            	 <div class="text-right">
							    <p class="d-inline">[ 
							    	<a href="/members/forum/edit/<?php echo $key->id ?>">Düzenle</a> ] [ 
                    <a href="/members/forum/delete/<?php echo $key->id ?>" onclick="return confirm('Mesajı silmek istediğinize eminmisiniz?')" >Sil</a> ] </p>
							</div>
                            <?php } ?>
                           
                          </div>
                          
                        </div>
                      </div>
                    </li>
                   
                  </ul>
                 <?php endforeach ?>
           
                          <!-- /cevaplar -->
                </div>


                <!-- uye cevap formu -->
                <?php 
                if (session::select('userid')){ 
                	

                	?>
                	<script src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.min.js" type="text/javascript"></script>
						<script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function(){
  	new nicEditor({
  		buttonList : ['fontSize','bold','italic','underline','left','center','right','justify','strikeThrough','subscript','superscript','link','unlink','image'],
      iconsPath:['https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEditorIcons.gif'],



  }).panelInstance('forum');
        
  });
  //]]>
  </script>
                	<form action="" method="post">
                	<div class="input-group">
                      <textarea name="konu_cevap" class="form-control" cols="30" rows="5" id="forum" placeholder="Cevabınızı Yazın..." ></textarea>                    
                    </div>
                     <div class="input-group">
                     
                     	<input type="hidden" name="title_seo" value="<?php echo $fk->title_seo; ?>">
                        <input type="hidden" name="konu_id" value="<?php echo $fk->id; ?>">
                        <button type="submit" class="btn btn-primary btn-block ">Cevabı Gönder</button>
                      </div>

                    </form>
                <?php }else{ ?>
                	<a href="<?php echo URL::base('member') ?>"><button class="btn btn-primary btn-block">Cevap yazmak için kayıt ol veya giriş yap
</button></a>
		
                <?php } ?>
                   
                    <!-- /uye cevap formu -->
              </div>
            </div>
          </div>
        </div>

<?php import::view(THEMA_NAME.'assets/footer'); ?>