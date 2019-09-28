<?php import::view(THEMA_NAME.'header'); ?>
<section id="Page-title" class="Page-title-Style1">
	<div class="container inner-Pages">
    	<div class="row">
            <div class="Page-title">
				<div class="col-md-6 Title-Pages">
                	<h2>Pisi Linux Blog </h2>
                </div>
                <div class="col-md-6 Catogry-Pages">
					<p>Buradasınız :  <a href="<?php URL::base(); ?>">Anasayfa</a>   /   Blog / Etiketler</p>
                </div>
            </div>
 		</div>
    </div>
</section>

<section id="Latest-News" class="light-wrapper">
<div class="container inner">
	<div class="row">
<?php import::view(THEMA_NAME.'blog/blogleft'); ?>
		<!-- içerik menü -->

			<div class="Blockquotes col-md-8">
<?php foreach ($list as $key ): ?>
			<div class="col-md-6">
				<a href="<?php echo URL::base('blog/icerik/'.$key->icerik_id.'-'.$key->baslik_seo.'.html'); ?>">
                    <blockquote class="blockquote-2">
                    	<img src="<?php echo URL::base($key->icerik_resim); ?>" alt="" style="width:80px !important; float: left;">
                        <p><?php echo $key->icerik_baslik; ?></p>
                        <span class="quote-name"><?php echo kelimebol($key->icerik_detay,250); ?></span>
                    </blockquote>
                    </a>
				</div>
	
<?php endforeach ?>

	</div>

		</div></div></section>

<?php import::view(THEMA_NAME.'footer'); ?>