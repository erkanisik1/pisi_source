<?php import::view(THEMA_NAME.'assets/header'); ?>

<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <form class="card" action="" method="post" id="sifrekontrol" autocomplete="off">
                        <div class="card-body p-12">
                            <div class="card-title">PİSİLİNUX YENİ ŞİFRE </div>
                            <br>
                            <div class="uyari"></div>  
                            <div class="form-group">
                                <label class="form-label">* ŞİFRENİZ</label>
                                <input type="password" class="form-control" name="password" required >
                            </div>

                            <div class="form-group">
                                <label class="form-label">* ŞİFRENİZİ TEKRAR YAZIN</label>
                                <input type="password" class="form-control" name="password2" required >
                            </div>
                            

                            <div class="form-footer"> 
                                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                             <input type="hidden" name="act" value="<?php echo $act; ?>">
                                <button type="submit" class="btn btn-primary btn-block">ŞİFREMİ DEĞİŞTİR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php import::view(THEMA_NAME.'assets/footer'); ?>