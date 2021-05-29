<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= $this->session->flashdata('message'); ?>

  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New pelanggan</a>
  <br>  
  <table class="table table-bordered" id="example1">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jenis_kelamin</th>
        <th scope="col">Notelp</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php   
        $i = 1;
       ?>
      <?php foreach($pelanggan as $p ) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $p['nama']; ?></td>
          <td><?= $p['alamat']; ?></td>
          <td><?= $p['jenis_kelamin']; ?></td>
          <td><?= $p['tlp']; ?></td>

          <td><a href="<?= base_url('') ?>laundry/hapusDataPelanggan/<?= $p['id']; ?>" class="badge badge-danger" onclick ="return confirm('yakin?');">Hapus</a>
            <a href="<?= base_url('') ?>laundry/edit_pelanggan/<?= $p['id']; ?>" class="badge badge-warning" data-toogle="modal" data-target="#newEditMenuModal">edit</a>
            </td>
        </tr>
        <?php   $i++; ?>
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
      <form action="<?= base_url('laundry'); ?>" method="post">
        <div class="modal-body">

          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
          </div>

          <div class="form-group">
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
              <option value="">Select Gender</option>
              <option value="LakiLaki">Laki Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>


          <div class="form-group">
            <input type="text" class="form-control" id="tlp" name="tlp" placeholder="No tlp">
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












