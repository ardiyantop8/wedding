<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <button class="btn btn-primary" id=btn_add_list_tamu>Tambah List Tamu</button><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Link undangan</th>
                <th>No Telp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_undangan as $row) : ?>
                <tr>
                    <td><?= $row->idTamu; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->get; ?></td>
                    <td><?= $row->noTelp; ?></td>
                    <td><?= $row->alamat; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->