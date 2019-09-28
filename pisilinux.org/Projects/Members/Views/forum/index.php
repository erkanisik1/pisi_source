<?php import::view('header'); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Mesajlarım ( <?php echo count($messages); ?> )
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20">ID</th>            
                            <th>Başlık</th>
                            <th width="120">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($messages as $key ): ?>
                            <tr>
                                <td><?php echo $key->id; ?></td>
                                <td><?php echo $key->title; ?></td>
                                <td><a href="/members/forum/message_edit/<?php echo $key->id; ?>">Düzenle</a> | Sil</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Cevapladıklarım ( <?php echo count($mymessages); ?> )
        </div>
        <div class="panel-body">
             <table class="table">
                    <thead>
                        <tr>
                            <th width="20">ID</th>            
                            <th>Başlık</th>
                            <th width="120">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mymessages as $key ): ?>
                            <tr>
                                <td><?php echo $key->id; ?></td>
                                <td><?php echo $key->title; ?></td>
                                <td><a href="/members/forum/message_edit/<?php echo $key->id; ?>">Düzenle</a> | Sil</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<?php import::view('footer'); ?>