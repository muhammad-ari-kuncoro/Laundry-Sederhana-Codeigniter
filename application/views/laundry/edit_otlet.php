<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
   


    <div class="card">
        <div class="card-header">
            Form Edit
        </div>
        <div class="card-body">
            <?= form_open_multipart('laundry/otlet_update/'.$otlet['id']); ?>
            <div class="form-group row">
                <label for="nama_otlet" class="col-sm-2 col-form-label">Nama Outlet</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_otlet" name="nama_otlet" value="<?= $otlet['nama_otlet']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $otlet['alamat']; ?>">
                </div>
            </div>

             <div class="form-group row">
                <label for="tlp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $otlet['tlp']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 