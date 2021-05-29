<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Paket</a>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;
     ?>
    <?php foreach($paket as $p) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $p['jenis']; ?></td>
      <td><?= $p['nama_paket']; ?></td>
      <td><?= $p['harga']; ?></td>
      <td><a href="<?= base_url('') ?>laundry/hapusDataPaket/<?= $p['id']; ?>" class="badge badge-danger" onclick ="return confirm('yakin?');">Hapus</a>
      <a href="<?= base_url('') ?>laundry/edit_paket/<?= $p['id']; ?>" class="badge badge-warning" data-toogle="modal" data-target="#newEditMenuModal">edit</a>
    </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
  </tbody>
</table>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('laundry/paket'); ?>" method="post">
        <div class="modal-body">

          <div class="form-group">
            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis laundry">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Nama Paket">
          </div>


          <div class="form-group">
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div> 
</form>
</div>
</div> 

