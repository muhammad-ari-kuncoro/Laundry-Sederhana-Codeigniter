<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<?= $this->session->flashdata('message'); ?>

	
<h5>Catatan : Untuk ROLE ID : 1 Adalah Admin, 2 Adalah Manager, 3 Adalah Kasir</h5>
	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New User</a>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Role Id</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach($userr as $u) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $u['name']; ?></td>
					<td><?= $u['email']; ?></td>
					<td><?= $u['role_id']; ?></td>
					<td><a href="<?= base_url() ?>admin/hapus_user/<?= $u['id'];?>" class="badge badge-danger" onclick ="return confirm('yakin?');">Hapus</a>
					<a href="<?= base_url() ?>admin/edit_user/<?= $u['id'];?>" class="badge badge-warning" >Edit</a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModalLabel">Add New User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/tambah_user'); ?>" method="post">
				<div class="modal-body">


					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
						<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
							<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="col-sm-6">
							<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
						</div>
					</div>

					<div class="form-group">
						<select name="role_id" id="role_id" class="form-control">
							<option value="">--Select Role Id--</option>
							
							<option value="1">Admin</option>
							<option value="2">Manager</option>
							<option value="3">kasir</option>

							
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