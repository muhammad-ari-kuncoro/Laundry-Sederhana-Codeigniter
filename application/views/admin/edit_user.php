<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="card">
        <div class="card-header">
            Form Edit
        </div>
        <div class="card-body">
            <?= form_open_multipart('admin/edit_user/'.$userr['id']); ?>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $userr['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $userr['email']; ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">role Id</label>
                <select name="role_id" id="role_id" class="form-control">
                    <option value="">--Select Role Id--</option>

                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">Kasir</option>
                    <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>


                </select>
            </div>


            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 