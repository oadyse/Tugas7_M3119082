<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
	<div class="container shadow p-3 mb-4 mt-3 bg-white rounded"">
				<div class=" card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-1">
					<img src="<?= base_url() ?>public/Logo_PT_Kereta_Api_Indonesia_(Persero).png"
						alt="" width="72" height="57">
				</div>
				<div class="col-sm-11">
					<h1>PT. Kereta Api Indonesia</h1>
				</div>
			</div>
		</div>
		<div class="card-body">
			<!-- <h5 class="card-title">Pemesanan Tiket</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="<?php echo base_url(); ?>Home/create"
			class="btn btn-primary"><b>></b></a> -->
			<a href="<?php echo base_url(); ?>Home/create"
				class="btn btn-success">Input Baru</a>
			<br />
			<br />
			<table class="table table-bordered">
				<tr>
					<th width="5%">No</th>
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Stasiun Asal</th>
					<th>Stasiun Tujuan</th>
					<th>Tanggal Berangkat</th>
					<th>Aksi</th>
				</tr>
				<?php
                    $no = 1;
                    foreach ($penumpang as $row) {
                        ?>
				<tr>
					<td widtd="5%"><?php echo $no++; ?>
					</td>
					<td><?php echo $row->nik; ?>
					</td>
					<td><?php echo $row->nama; ?>
					</td>
					<td><?php echo $row->st_asal; ?>
					</td>
					<td><?php echo $row->st_tujuan; ?>
					</td>
					<td><?php echo $row->depart; ?>
					</td>
					<td>
						<a href="<?php echo base_url(); ?>Home/edit/<?php echo $row->id; ?>"
							class="btn btn-warning">Edit</a>
						<a href="<?php echo base_url(); ?>Home/delete/<?php echo $row->id; ?>"
							class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				<?php
                    }
                    ?>
			</table>
		</div>
	</div>
	</div>
	</div>
</body>

</html>
