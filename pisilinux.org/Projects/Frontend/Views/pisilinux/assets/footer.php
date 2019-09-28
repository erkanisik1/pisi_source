      

      <footer class="footer" id="footer">
        <div class="container" >
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
            
              <div class="row align-items-center " >
           <a href="https://www.turhost.com/sunucu/" target="_blank">Sunucu Kiralama<br>
             <img src="<?php echo URL::base('img/sponsor/sunucu-sponsoru-turhost.png'); ?>" class="btn-dark" alt="" width="200" style="padding: 0.5em;"></a>

                          </div>

            </div><?php $d = rand(); ?>
         <!--    
 <div class="col-12 col-lg-auto mt-3 mt-lg-0 ">

           
  
        <a href="https://www.facebook.com/Pisilinux/" target="_blank"><i class="fab fa-facebook-square fa-2x btn-secondary"></i></a>
        <a href="https://twitter.com/pisi_linux" target="_blank"><i class="fab fa-twitter-square fa-2x btn-secondary"></i></a>
        <a href="https://www.youtube.com/channel/UCLGSGLpxVE-vxzBuebBj3tA" target="_blank"><i class="fab fa-youtube-square fa-2x btn-secondary"></i></a>
        <a href="https://www.linkedin.com/in/pisi-linux-33a5b6137" target="_blank"><i class="fab fa-linkedin-square fa-2x btn-secondary"></i></a>
        <a href="https://www.instagram.com/pisilinux_official/" target="_blank"><i class="fab fa-instagram fa-2x btn-secondary"></i></a>
     
        <a href="https://t.me/joinchat/MAcpp0o6E4dAAoz090cDjA" target="_blank" title="Pisilinux ekibinin buluşma noktası"><i class="fab fa-telegram fa-2x btn-secondary" ></i></a>
      </div>
    -->
       <div class="col-12 col-lg-auto mt-3 mt-lg-0 ">
              Copyright © 2013 - 2018 Pisi Linux. All rights reserved.  
            </div>
              
            </div>
        </div>
      </footer>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
      <script src="/<?php echo THEMES_DIR ?>pisilinux/js/my.js?v=<?php echo $d; ?>"></script>
      <script src="https://requirejs.org/docs/release/2.3.6/minified/require.js"></script>
      <script src="<?php echo '/'.THEMES_DIR ?>pisilinux/js/dashboard.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
       <script>
    requirejs.config({
      URL::base: '.'
    });
  </script>
      
    </div>

  </body>
  </html>