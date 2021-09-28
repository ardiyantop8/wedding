<!-- Begin Page Content -->
<div class="container-fluid main-content">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <button class="btn btn-primary" id=btn_add_list_tamu>Tambah List Tamu</button><br><br>
    <form action="" method="post" id="list_undangan">
        <!-- Posts List -->
        <table border='1' class="table table-striped table-bordered" width='100%' style='border-collapse: collapse;' id='postsList'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <!-- Paginate -->
        <div style='margin-top: 10px;' id='pagination'></div>
    </form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->