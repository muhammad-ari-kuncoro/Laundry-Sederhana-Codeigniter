<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= $this->session->flashdata('message'); ?>

  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Transaksi</a>

  <div class="row">
   <div class="col-md">
     <?= form_open('laundry/search_transaksi'); ?>
     <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autocomplete="off" autofocus>
       <button type="submit" class="btn btn-primary">Cari</button>
       <?= form_close() ?>
     </div>
   </div>
 </div>

 <br>  
 <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Outlet</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Tgl</th>
      <th scope="col">Batas Waktu</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Jml Kilo</th>
      <th scope="col">Harga</th>
      <th scope="col">Total Bayar</th>
      <th scope="col">tgl Bayar</th>
      <th scope="col">dibayar</th>
      <th scope="col">Nama Penginput</th>
      <th scope="col">aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach($transaksi as $t) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $t['nama_otlet'] ?></td>
        <td><?= $t['nama_pelanggan']; ?></td>
        <td><?= $t['tgl']; ?></td>
        <td><?= $t['batas_waktu']; ?></td>
        <td><?= $t['nama_paket']; ?></td>
        <td><?= $t['jml_kilo']; ?></td>
        <td><?= $t['harga']; ?></td>
        <td><?= $t['total']; ?></td>
        <td><?= $t['tgl_bayar']; ?></td>
        <td><?= $t['dibayar']; ?></td>
        <td><?= $t['nama_penginput']; ?></td>
        <td><a href="<?= base_url('') ?>laundry/hapusDatatransaksi/<?= $t['id']; ?>" class="badge badge-danger" onclick ="return confirm('yakin?');">Hapus</a>
          <a href="<?= base_url('') ?>laundry/cetak_transaksi/<?= $t['id']; ?>" class="badge badge-success">Cetak</a>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content --> 

<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('laundry/transaksi_post'); ?>" method="post" name="form">
        <div class="modal-body">
         <div class="form-group">

          <div class="form-group">
            <select name="nama_otlet" id="nama_otlet" class="form-control">
              <option value="">Select Outlet</option>
              <?php foreach($otlet as $o) : ?>
                <option value="<?= $o['nama_otlet']; ?>"><?= $o['nama_otlet']; ?></option>
              <?php endforeach; ?>
              <?= form_error('nama_otlet', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>

          <div class="form-group">
            <select name="nama_pelanggan" id="nama_pelanggan" class="form-control">
              <option value="">Select Pelanggan</option>
              <?php foreach($pelanggan as $p) : ?>
                <option value="<?= $p['nama']; ?>"><?= $p['nama']; ?></option>
              <?php endforeach; ?>
              <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>

          <label>Tgl Sekarang</label>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl" id="tgl" >
            <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <label>Batas Waktu</label>
          <div class="form-group">
            <input type="date" class="form-control" name="batas_waktu" id="batas_waktu">
            <?= form_error('batas_waktu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <select name="nama_paket" id="nama_paket" class="form-control">
              <option value="">--Select Paket--</option>
              <?php foreach($paket as $pak) : ?>
                <option value="<?= $pak['nama_paket']; ?>"><?= $pak['nama_paket']; ?></option>
              <?php endforeach; ?>
              <?= form_error('nama_paket', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>

          <label>Jumlah Kilo</label>
          <div class="form-group">
            <input type="number" class="form-control" id="jml_kilo" name="jml_kilo" required="" onkeyup="" placeholder="Jumlah Kilo">
            <?= form_error('jml_kilo', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <select name="harga" id="harga" class="form-control">
              <option value="">--Harga--</option>
              <?php foreach($paket as $pak) : ?>
                <option value="<?= $pak['harga']; ?>"><?= $pak['harga']; ?></option>
              <?php endforeach; ?>
              <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="" name="total" size="9" readonly="">
            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?> 
          </div>

          <input type=button name=submit onclick="kali()" value="X">
          <br>
          <label for="tgl_bayar">Tanggal Dibayar</label>
          <div class="form-group">
            <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" placeholder="tanggal Bayar">
            <?= form_error('tgl_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>


          <div class="form-group">
            <select name="dibayar" id="dibayar" class="form-control">
              <option value="">--Select Dibayar--</option>
              <option value="Dibayar">Di Bayar</option>
              <option value="BelumDibayar">Belum Dibayar</option>
              <?= form_error('dibayar', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>

          <div class="form-group">
            <select name="nama_penginput" id="nama_penginput" class="form-control">
              <option value="">--Select Penginput--</option>
              <?php foreach($userr as $us) : ?>
                <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
              <?php endforeach; ?>
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </select>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div> 








<script type="text/javascript">

  function cek(){
   if(form.jml_kilo.value == "" || form.harga.value == ""){
 alert("data kosong"); //jika angka kosong maka pesan akan tampil
 exit;
}
}
function kali() {
 cek();
 a=eval(form.jml_kilo.value);
 b=eval(form.harga.value);
 c=a*b
 form.total.value = c;
}
</script>