<!-- start = konten save the date -->
<div id="app">
    <div class="main-slider" style="background:url(assets/img/wedding/<?php echo $isi_resepsi[0]['fileGambar']; ?>); background-size:cover;">
        <div class="display-table center-text">
            <div class="display-table-cell">
                <div class="slider-content">

                    <i class="small-icon icon icon-tie"></i>
                    <?php if (isset($isi_resepsi[0]['tglResepsi'])) : ?>
                        <?php
                        $getTanggal = $isi_resepsi[0]['tglResepsi'];
                        $pecahTanggal = explode("-", $getTanggal);
                        $tahun = $pecahTanggal[0];
                        $bulan = $pecahTanggal[1];
                        $tanggal = $pecahTanggal[2];

                        if ($bulan == "01") {
                            echo "<h5 = class'date'>" . $tanggal . " Januari " . $tahun . "</h5>";
                        } else if ($bulan == "02") {
                            echo "<h5 = class'date'>" . $tanggal . " Februari " . $tahun . "</h5>";
                        } else if ($bulan == "03") {
                            echo "<h5 = class'date'>" . $tanggal . " Maret" . $tahun . "</h5>";
                        } else if ($bulan == "04") {
                            echo "<h5 = class'date'>" . $tanggal . " April " . $tahun . "</h5>";
                        } else if ($bulan == "05") {
                            echo "<h5 class='date'>" . $tanggal . " Mei " . $tahun . "</h5>";
                        } else if ($bulan == "06") {
                            echo "<h5 class='date'>" . $tanggal . " Juni " . $tahun . "</h5>";
                        } else if ($bulan == "07") {
                            echo "<h5 = class'date'>" . $tanggal . " Juli " . $tahun . "</h5>";
                        } else if ($bulan == "08") {
                            echo "<h5 = class'date'>" . $tanggal . " Agustus " . $tahun . "</h5>";
                        } else if ($bulan == "09") {
                            echo "<h5 = class'date'>" . $tanggal . " September " . $tahun . "</h5>";
                        } else if ($bulan == "10") {
                            echo "<h5 = class'date'>" . $tanggal . " Oktober " . $tahun . "</h5>";
                        } else if ($bulan == "11") {
                            echo "<h5 = class'date'>" . $tanggal . " November " . $tahun . "</h5>";
                        } else if ($bulan == "12") {
                            echo "<h5 = class'date'>" . $tanggal . " Desember " . $tahun . "</h5>";
                        }

                        ?>
                    <?php endif; ?>
                    <h3 class="pre-title">Save The Date</h3>
                    <h1 class="title"><?php echo $isi_resepsi[0]['namaPria']; ?><br> <i class="icon icon-heart"></i><br> <?php echo $isi_resepsi[0]['namaWanita']; ?></h1>
                    <br><br><br>
                    <?php if (isset($link_get[0]['nama'])) : ?>
                        <h4 style="color:black;">Turut Mengundang :</h4>
                        <h2><?php echo $link_get[0]['nama']; ?></h2><br>
                        <h2>Di Tempat</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end = konten save the date -->

    <!-- start = konten sambutan -->
    <section class="section story-area center-text" id="sambutan">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <div class="heading">
                        <h2 class="title">Sambutan</h2>
                        <span class="heading-bottom"><i class="icon icon-star"></i></span>
                    </div>
                    <!-- statrt = untuk menampilkan sambutan -->

                    <!-- bagian pembuka sambutan-->
                    <?php if (isset($isi_sambutan[0]['pembukaSambutan'])) : ?>
                        <p class="desc margin-bottom"><?= $isi_sambutan[0]['pembukaSambutan']; ?>
                            <br>
                            <!-- bagian isi sambutan -->
                            <?php echo $isi_sambutan[0]['isiSambutan']; ?>
                            <br>
                            <!-- bagian penutup sambutan -->
                            <?php echo $isi_sambutan[0]['penutupSambutan']; ?>
                        </p>
                    <?php endif; ?>
                    <!-- end = untuk menampilkan sambutan -->

                </div>
            </div>
        </div>
    </section>
    <!-- end =konten sambutan -->


    <!-- start = Coutdown acara dimulai resepsi -->
    <section class="section counter-area center-text">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="heading">
                        <h2 class="title">Jangan Lupa</h2>
                        <?php
                        $tgl = $isi_resepsi[0]['tglResepsi'];
                        $pTgl = explode("-", $tgl);
                        $hYears = $pTgl[0];
                        $hMounth = $pTgl[1];
                        $hDay = $pTgl[2];
                        $jam =  (int)((mktime(0, 0, 0, $hMounth, $hDay, $hYears) - time()) / 86400);
                        ?>
                        <span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
                    </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="remaining-time">
                        <?php
                        echo "Masih Ada Waktu " . $jam . " Hari Lagi, Sampai Tanggal $hDay-$hMounth-$hYears";
                        echo "<br>";
                        echo "Acara Resepsi Kami Akan Dilaksanakan Pada Tanggal $hDay-$hMounth-$hYears Pukul " . $isi_resepsi[0]['jamResepsi'];
                        // }
                        ?>


                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- end = Coutdown acara dimulai resepsi -->


    <!-- start = konten cerita -->
    <section class="section w-details-area center-text" id="ceritaKita">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <div class="heading">
                        <h2 class="title">Cerita Kita</h2>
                        <span class="heading-bottom"><i class="icon icon-star"></i></span>
                    </div>

                    <!-- start = konten bagian cerita  -->
                    <div class="wedding-details margin-bottom">
                        <?php
                        // $cerita = mysqli_query($conn, "SELECT * FROM cerita");
                        // while ($infoCerita = mysqli_fetch_array($cerita)) {
                        foreach ($isi_cerita as $key) {
                        ?>
                            <?php
                            $id = $key['idCerita'];

                            if ($id % 2 == 0) {
                            ?>
                                <div class="w-detail right">
                                    <img src="assets/img/wedding/<?php echo $key['gambarCerita']; ?>">
                                    <h4 class="title"><?php echo $key['judulCerita']; ?></h4>
                                    <p><?php echo $key['isiCerita']; ?></p>
                                </div>
                            <?php
                            } else if ($id % 2 >= 1) {
                            ?>
                                <div class="w-detail left">
                                    <img src="assets/img/wedding/<?php echo $key['gambarCerita']; ?>">
                                    <h4 class="title"><?php echo $key['judulCerita']; ?></h4>
                                    <p><?php echo $key['isiCerita']; ?></p>
                                </div>
                            <?php
                            }
                            ?>

                        <?php
                        }
                        ?>
                        <!-- end = konten bagain cerita -->

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end = konten cerita -->

    <!-- start = wedding ceremoni -->
    <section class="section ceremony-area center-text" id="wedding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="heading">
                        <h2 class="title">Wedding & Ceremonies</h2>
                        <span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
                    </div>

                    <div class="ceremony margin-bottom">
                        <?php
                        echo "<p class='desc'>" . $isi_adat[0]['penjelasan'] . "</p>";
                        ?>


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end = wedding ceremoni -->


    <!-- start = gallery prewedding -->
    <section class="section galery-area center-text" id="gallery">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="heading">
                        <h2 class="title">Gallery Prewedding</h2>
                        <span class="heading-bottom"><i class="icon icon-star"></i></span>
                    </div>

                    <div class="image-gallery">

                        <!-- start = untuk menampilkan foto -->
                        <!-- nanti setting ukuran 600x400 -->
                        <div class="row">
                            <?php
                            // $galeri = mysqli_query($conn, "SELECT * FROM galery LIMIT 6");
                            // while ($infoGaleri = mysqli_fetch_array($galeri)) {
                            foreach ($isi_galery as $key) {
                                // echo "<pre>";
                                // print_r($key);
                                // die;
                            ?>
                                <div class="col-md-4 col-sm-6">
                                    <a href="assets/img/wedding/<?php echo $key['namaFile']; ?>" data-fluidbox><img class="margin-bottom" src="assets/img/wedding/<?php echo $key['namaFile']; ?>" style="width:350px; height:200px;"></a>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                        <!-- end = untuk tampilkan foto -->

                        <a class="btn-2 margin-bottom gallery-btn" href="gallery.php">VIEW ALL GALLERY</a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end = galery prewedding -->


    <!-- satart = lokasi prewed -->
    <section class="contact-area">
        <div class="contact-wrapper section float-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <div class="heading">
                            <h3 class="title">Lokasi Resepsi</h3>
                            <i class="icon icon-star"></i>
                        </div>

                        <div class="margin-bottom">
                            <p>Alamat :</p>
                            <?php
                            // $lokasi = mysqli_query($conn, "SELECT * FROM resepsi");
                            // while ($infoLokasi = mysqli_fetch_array($lokasi)) {
                            echo $isi_resepsi[0]['alamatResepsi'];
                            echo "<h4>" . $isi_resepsi[0]['namaGedung'] . "</h4>";

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start = foto gedung -->
        <div class="contact-wrapper section float-right">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <div class="margin-bottom">
                            <img src="assets/img/wedding/<?php echo $isi_resepsi[0]['gambarGedung']; ?>" style="width :535px; height :350px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end foto gedung -->


    </section>
    <!-- end = lokasi prewed -->
</div>