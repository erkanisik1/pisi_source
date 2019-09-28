<?php import::view('header'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Forum Edit
            </div>
            <div class="panel-body">

                <form method="post" >

                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="title" class="form-control" value="<?php echo forum_content_row($id)->title; ?>" disabled>
                    </div>
                  

                    <div class="form-group">
                        <label>Mesajınız</label>
                        <textarea name="content" class="form-control" id="forum" rows="10">
                            <?php decode(forum_content_row($id)->content); ?>
                        </textarea>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="content_id" value="<?php echo $id; ?>">
                    <input type="hidden" name="link" value="/forum/konu/<?php echo $id.'-'.seo(forum_content_row($id)->title); ?>">
                    <button type="submit" class="btn btn-primary btn-block"> KAYDET</button>
                </form>
 
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
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
<?php import::view('footer'); ?>