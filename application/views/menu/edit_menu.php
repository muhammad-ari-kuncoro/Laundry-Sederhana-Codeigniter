<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
   


    <div class="card">
        <div class="card-header">
            Form Edit
        </div>
        <div class="card-body">
            <?= form_open_multipart('menu/menu_update/'.$user_menu['id']); ?>
            <div class="form-group row">
                <label for="nama_otlet" class="col-sm-2 col-form-label">Nama Menu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $user_menu['menu']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 