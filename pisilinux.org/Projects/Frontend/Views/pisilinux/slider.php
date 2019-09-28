<div class="col-md-12">
  <div class="card">
    <!--  -->
    <div id="carousel-captions" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" id="myCarousel">
       <?php  foreach ($sldr as $key): ?>
        <div class="carousel-item ">
          <a href="<?php echo $key->link;?>" target="_blank"><img class="d-block w-100" alt="" src="<?php echo $key->resim;?>?of=webp" data-holder-rendered="true">
            <div class="carousel-item-background d-none d-md-block"></div>
          </div>
        <?php endforeach ?>
      </div>
      <a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div> 