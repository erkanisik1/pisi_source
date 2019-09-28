<?php import::view(THEMA_NAME.'assets/header'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.min.js" type="text/javascript"></script>
            <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function(){
    new nicEditor({
      buttonList : ['fontSize','bold','italic','underline','left','center','right','justify','strikeThrough','subscript','superscript','link','unlink','image'],
      iconsPath : 'https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEditorIcons.gif'
  }).panelInstance('yenikonu');
    
        
  });
function validate(){ 
    var nicInstance = nicEditors.findEditor('yenikonu');
    var messageContent = nicInstance.getContent();
    //since nicEditor sets default value of textarea as <br>
    //we are checking for it
    if(messageContent=="<br>") { 
      $.alert({
        'title':'Pisilinux.org uyarı!',
        'content':'Sorunuzu yazmadan formu gönderemezsiniz.',
        'theme':'dark'
      });
     
     document.mainfrm.yenikonu.focus();
     return false;
   }
   else {
      
   }   
    return true;
}
  //]]>
  </script>
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col mx-auto card">
              
              <form  name="mainfrm" action="" method="post" onSubmit="return validate();">
                 <div class="card-body p-12">
                  <div class="card-title">PİSİLİNUX SORU CEVAP <span class="text-danger">YENİ KONU</span>  </div>
                  <div class="row">
                    
                  </div>
                    <div class="form-group">
                    <label class="form-label"><span class="text-danger">*</span> KATEGORİ</label>
                    <select name="category_id" class="form-control" required>
                      <option value="">Seçiniz</option>
                      <?php foreach (question_category() as $key): ?>
                        <option value="<?php echo $key->id ?>"><?php echo $key->adi ?></option>
                      <?php endforeach ?>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label class="form-label"><span class="text-danger">*</span> BAŞLIK</label>
                    <input type="text" class="form-control" name="title" placeholder="Sorunun Başlığını yazın..." required>
                  </div>
                  <div class="form-group">
                    <label class="form-label"><span class="text-danger">*</span> SORUNUZ</label>
                    <textarea name="content" id="yenikonu" cols="30" rows="10" class="form-control" ></textarea>
                   
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"> KAYDET</button>
                </div>
              </form></div></div></div></div></div>


<?php import::view(THEMA_NAME.'assets/footer'); ?>