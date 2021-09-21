<!-- start = footer  -->
<footer>
  <div class="container center-text" id="sosmed">

    <div class="logo-wrapper">
      <a class="logo" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
      <i class="icon icon-star"></i>
    </div>
    <ul class="social-icons">
      <li><a href="#"><i class="icon icon-heart"></i></a></li>
      <li><a href="<?php echo $isi_sosmed[0]['twitter']; ?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
      <li><a href="<?php echo $isi_sosmed[0]['ig']; ?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
      <li><a href="<?php echo $isi_sosmed[0]['fb']; ?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
      <?php
      ?>
    </ul>
    <ul class="footer-links">
      <li><a href="index.php<?= $link_get[0]['get']; ?>">BERANDA</a></li>
      <li><a href="#sambuta">SAMBUTAN</a></li>
      <li><a href="#ceritaKita">CERITA KITA</a></li>
      <li><a href="#gallery">GALERI</a></li>
      <li><a href="<?= base_url('Umum/list_tamu'); ?><?= $link_get[0]['get']; ?>">TAMU UNDANGAN</a></li>
    </ul>
    <p class="copyright"> Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script>
      - Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Ardiyanto Putra</p>
  </div>
</footer>
<!-- end = footer -->

<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.fluidbox.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>