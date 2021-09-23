<a class="logo" href="#"><img src="assets/images/logo-white.png" alt="Logo"></a>
<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
<ul class="main-menu visible-on-click" id="main-menu">
  <!-- <input type="hidden" id="hide_get" name="hide_get" value="<?php echo $_GET['link'] ?>"> -->
  <!-- <li><a href="index.php" onclick="location.href=this.href+'?link='+scrt_var;return false;">BERANDA</a></li> -->
  <?php
  if (isset($link_get[0]['get'])) : ?>
    <li><a href="index.php/<?= $link_get[0]['get']; ?>">BERANDA</a></li>
    <li><a href="#sambutan/<?= $link_get[0]['get']; ?>">SAMBUTAN</a></li>
    <li><a href="#ceritaKita/<?= $link_get[0]['get']; ?>">CERITA KITA</a></li>
    <li><a href="#gallery/<?= $link_get[0]['get']; ?>">GALERI</a></li>
    <li><a href="<?= base_url('Umum/list_tamu/'); ?><?= $link_get[0]['get']; ?>">TAMU UNDANGAN</a></li>
    <li><a href="<?= base_url('Umum/aboutApps/'); ?><?= $link_get[0]['get']; ?>">TENTANG APLIKASI</a></li>
    <li><a href="<?= base_url('Auth'); ?>">MASUK</a></li>
  <?php else : ?>
    <li><a href="index.php">BERANDA</a></li>
    <li><a href="#sambutan">SAMBUTAN</a></li>
    <li><a href="#ceritaKita">CERITA KITA</a></li>
    <li><a href="#gallery">GALERI</a></li>
    <li><a href="<?= base_url('Umum/list_tamu'); ?>">TAMU UNDANGAN</a></li>
    <li><a href="<?= base_url('Umum/aboutApps'); ?>">TENTANG APLIKASI</a></li>
    <li><a href="<?= base_url('Auth'); ?>">MASUK</a></li>
  <?php
  endif; ?>
</ul>
</div>
</header>