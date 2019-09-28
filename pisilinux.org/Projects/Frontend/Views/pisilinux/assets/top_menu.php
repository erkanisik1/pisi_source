

<div class="col-lg order-lg-first">
  <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    
      <li class="nav-item">
        <a href="/blog" class="nav-link">
          <i class="fe fe-book"></i> <?php echo translate('blog'); ?></a>
        </li>
        <li class="nav-item">
          <a href="/forum" class="nav-link">
            <i class="fab fa-wpforms"></i> <?php echo translate('questionanswer'); ?></a>
          </li>
          <li class="nav-item">
            <a href="/wiki" class="nav-link">
              <i class="fab fa-odnoklassniki"></i> Wiki</a>
            </li>
            <li class="nav-item">
              <a href="/indir" class="nav-link">
                <i class="fe fe-download"></i> <?php echo translate('download'); ?></a>
              </li>
              <li class="nav-item">
                <a href="/sss" class="nav-link">
                  <i class="fas fa-book"></i> S.S.S</a>
                </li>
                <li class="nav-item">
                  <a href="/bugs" class="nav-link">
                    <i class="fas fa-bug"></i> Hata Kaydı</a>
                  </li>
                 
                    <li class="nav-item">
                      <?php if(!USERID){ ?>
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users"></i>  <?php echo translate('memberoperations'); ?></a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                          <a href="/member" class="dropdown-item "><?php echo translate('login') ?></a>
                          <a href="/member/register" class="dropdown-item "><?php echo translate('register') ?></a>
                        </div>
                      <?php }?>
                    </li>
                  </ul>
                </div>