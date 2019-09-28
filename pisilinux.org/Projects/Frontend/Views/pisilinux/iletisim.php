<?php import::view(THEMA_NAME.'assets/header.php'); ?>
<br><br>

<div class="container">
  <h2><?php echo translate('pisilinuxcontact') ?></h2>

<form action="" method="post">

<fieldset class="form-fieldset">
  <div class="form-group">
    <label class="form-label"><span class="form-required">*</span> <?php echo translate('namesurname') ?></label>
     <div class="input-icon mb-3">
      <span class="input-icon-addon">
      <i class="fe fe-user"></i>
    </span>
    <input type="text" name="name" class="form-control" required/>
  </div>
  </div>

  <div class="form-group">
    <label class="form-label"><span class="form-required">*</span> <?php echo translate('emailadress') ?></label>
     <div class="input-icon mb-3">
      <span class="input-icon-addon">
      <i class="fe fe-mail"></i>
    </span>
    <input type="email" name="email" class="form-control" placeholder="<?php echo translate('mailplaceholder') ?>" required />
  </div>
  </div>

  <div class="form-group mb-0">
    <label class="form-label"><span class="form-required">*</span> <?php echo translate('message') ?></label>
    <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="<?php echo translate('messageplaceholder'); ?>" required></textarea>
  </div>

<div class="form-group mb">
  <label for=""></label>
  <input type="hidden" id="currentDate" name="currentDate" value="">  
  <button class="btn btn-primary btn-block"> <?php echo translate('messagesend') ?></button>
</div>

</fieldset>

</form>
</div>

<?php import::view(THEMA_NAME.'assets/footer'); ?>