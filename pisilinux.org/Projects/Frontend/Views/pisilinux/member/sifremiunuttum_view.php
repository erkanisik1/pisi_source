<?php import::view(THEMA_NAME.'assets/header'); ?>
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <form class="card" action="" method="post">
                        <div class="card-body p-12">
                            <div class="card-title">PİSİLİNUX YENİ ŞİFRE </div>
                            <br>
                            <div class="form-group">
                                <label class="form-label">* <?php echo translate('emailadress') ?></label>
                                <input type="email" class="form-control" name="email" required >
                            </div>
                            <div class="form-footer"> 
                                <button type="submit" class="btn btn-primary btn-block">ŞİFREMİ SIFIRLA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php import::view(THEMA_NAME.'assets/footer'); ?> 