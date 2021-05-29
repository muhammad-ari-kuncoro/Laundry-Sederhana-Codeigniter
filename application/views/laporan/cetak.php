<style type="text/css" media="print">
	@page {
		size: auto;
		/* auto is the initial value */
		margin: 0;
		/* this affects the margin in the printer settings */
	}
</style>
<br>


<body onload="window.print()">
	
	<center>
		
		<h2>LAUNDRY HAPPY</h2>

		<h3>"Anda Senang Kami Kecewa , Anda Asik , Kami Usik"</h3>

		Jl. Haji Sitompul. 102 Kota Bekasi, Jawa Barat, Kode Pos: 90223

		Website: http://internetpositif.com/, email: ewingHd@gmail.com, no. telp/fax: (081)214749103 
		<h4 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
			<h4 class="h3 mb-4 text-gray-800"><?= $subtitle; ?></h2>
				-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  

				<table border="1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Outlet</th>
							<th>Nama Pelanggan</th>
							<th>tanggal</th>
							<th>Batas Waktu</th>
							<th> Nama Paket</th>
							<th> Jumlah Kilo</th>
							<th>Harga</th>
							<th>Total Bayar</th>
							<th>Tanggal Bayar</th>
							<th>Dibayar</th>
							<th>Nama Penginput</th>





						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php  foreach($datafilter as $row) : ?>
							<tr>

								<td><?= $no++; ?></td>
								<td><?= $row->nama_otlet; ?></td>
								<td><?= $row->nama_pelanggan; ?></td>
								<td><?= $row->tgl; ?></td>
								<td><?= $row->batas_waktu; ?></td>
								<td><?= $row->nama_paket; ?></td>
								<td><?= $row->jml_kilo; ?></td>
								<td><?= $row->harga; ?></td>
								<td><?= $row->total; ?></td>
								<td><?= $row->tgl_bayar; ?></td>
								<td><?= $row->dibayar; ?></td>
								<td><?= $row->nama_penginput; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</body>
		</center>