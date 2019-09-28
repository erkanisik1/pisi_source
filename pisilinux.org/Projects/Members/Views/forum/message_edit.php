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
                        <input type="text" name="title" class="form-control" value="<?php echo $edit->title; ?>">
                    </div>

                      <div class="form-group">
                        <label>Konu </label>
                        <p style="padding: 10px;border:1px solid #ccc;"><?php echo forum_content_row($edit->content_id)->content; ?></p>
                                       
                    </div>

                    <div class="form-group">
                        <label>Mesajınız</label>
                        <textarea name="content" class="form-control" id="editor" rows="10">
                            <?php echo $edit->content; ?>
                        </textarea>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $edit->id ?>">
                    <input type="hidden" name="content_id" value="<?php echo $edit->content_id; ?>">
                    <input type="hidden" name="link" value="<?php echo Url::base('members/forum/') ?>">
                    <button type="submit" class="btn btn-primary btn-block"> KAYDET</button>
                </form>

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

<?php import::view('footer'); ?>