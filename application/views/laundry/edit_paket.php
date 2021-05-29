<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    


    <div class="card">
        <div class="card-header">
            Form Edit
        </div>
        <div class="card-body">
            <?= form_open_multipart('laundry/paket_update/'.$paket['id']); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $paket['jenis']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="nama_paket" value="<?= $paket['nama_paket']; ?>">
                </div>
            </div>

             <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $paket['harga']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 