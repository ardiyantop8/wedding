<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-7">
            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="to" class="col-sm-2 col-form-label">Undangan Untuk </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="to" id="to" placeholder="Masukan Nama yang diundang ">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">No Telp </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" id="no_telp">
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>



        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->