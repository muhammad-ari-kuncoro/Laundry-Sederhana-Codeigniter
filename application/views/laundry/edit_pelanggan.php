<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    


    <div class="card">
        <div class="card-header">
            Form Edit Pelanggan
        </div>
        <div class="card-body">
            <?= form_open_multipart('laundry/pelanggan_update/'.$pelanggan['id']); ?>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pelanggan['nama']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pelanggan['alamat']; ?>">
                </div>
            </div>

              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $pelanggan['jenis_kelamin']; ?>">
                </div>
            </div>

             <div class="form-group row">
                <label for="tlp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $pelanggan['tlp']; ?>">
                </div>
            </div>



            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 