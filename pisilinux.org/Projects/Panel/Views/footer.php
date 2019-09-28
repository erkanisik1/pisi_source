</div>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Erkan IŞIK <a href="https://trtemp.com">trtemp.com</a> </div>
</div>

<!--end-Footer-part-->
 <?php $d = date('dmYHis'); ?>
<?php import::script('jquery3'); ?> 
<script src="/<?php echo THEMES_DIR; ?>panel/js/jquery.ui.custom.js"></script> 
<script src="/<?php echo THEMES_DIR; ?>panel/js/bootstrap.min.js"></script>
<script src="/<?php echo THEMES_DIR; ?>panel/js/jquery.dataTables.min.js"></script> 
<script src="/<?php echo THEMES_DIR; ?>panel/js/jquery.ui.custom.js"></script>
<script src="/<?php echo THEMES_DIR; ?>panel/js/matrix.js"></script> 
<script src="/<?php echo THEMES_DIR; ?>panel/js/matrix.tables.js"></script> 
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=d6svnnvb45e83intvoi2vqxggihegsrd73eah9unxtrcz5r3"></script>
<script src="/<?php echo THEMES_DIR; ?>panel/js/myjsscript.js?v=<?php echo $d ?>"></script>  
<?php import::view('editor');?> 
</body>
</html>
