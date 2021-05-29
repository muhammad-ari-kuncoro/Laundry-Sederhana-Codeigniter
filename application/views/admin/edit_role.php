<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="card">
        <div class="card-header">
            Form Edit
        </div>
        <div class="card-body">
            <?= form_open_multipart('admin/role_update/'.$user_role['id']); ?>
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="role" name="role" value="<?= $user_role['role']; ?>">
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 