<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	


	<div class="card">
		<div class="card-header">
			Filter By Tanggal
		</div>
		<div class="card-body">
			<form action="<?= base_url(); ?>laporan/filter" method="post" target='_blank'>

				<input type="hidden" name="nilaifilter" value="1">

				Tanggal Awal <br>
				<input type="date" name="tglawal" required=""><br>
				Tanggal Akhir <br>
				<input type="date" name="tglakhir" required=""><br>

				<br>
				<input type="submit" value="Print" class="btn btn-primary">
			</form>
		</div>
	</div>

	<br>
	<br>
	<br>
	<div class="card">
		<div class="card-header">
			Filter By Bulan
		</div>
		<div class="card-body">
			
			<form action="<?= base_url(); ?>laporan/filter" method="post" target='_blank'>

				<input type="hidden" name="nilaifilter" value="2">

				<h4>Pilih Tahun</h4>
				<select name="tahun1" required="">
					<?php foreach ($tahun as $row): ?>

						<option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
					<?php endforeach; ?>
				</select>

				<h4>Bulan Awal</h4>
				<select name="bulanawal" required="">
					<option value="1">Januari</option>
					<option value="2">febuari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>		
				</select>
				<h4>Bulan Akhir</h4>
				<select name="bulanakhir" required="">
					<option value="1">Januari</option>
					<option value="2">febuari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>		
				</select>
				<br>

				<br>
				<input type="submit" value="Print" class="btn btn-primary">
				<br>
			</form>
		</div>
	</div>




	<br>
	<br>
	<br>
	<div class="card">
		<div class="card-header">
			Filter By Tahun
		</div>
		<div class="card-body">

			<form action="<?= base_url(); ?>laporan/filter" method="post" target='_blank'>

				<input type="hidden" name="nilaifilter" value="3">

				<h4>Pilih Tahun</h4>
				<select name="tahun2" required="">
					<?php foreach ($tahun as $row): ?>

						<option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
					<?php endforeach; ?>
				</select>
				<br>

				<br>
				<input type="submit" value="Print" class="btn btn-primary">
			</form>
		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

