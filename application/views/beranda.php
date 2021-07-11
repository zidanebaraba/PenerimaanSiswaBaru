<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Admin page</title>
</head>

<body>
	<div class="container">
		<div class="card">
			<!-- START INFORMASI SISWA BARU -->
			<div class="card-header text-center">
				SELAMAT DATANG, ADMIN!
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="col">
									<div class="card text-center">
										<div class="card-header ">
											TOTAL PENDAFTAR
										</div>
										<div class="card-body">
											<?php echo $siswa; ?>
										</div>
										<div class="card-footer text-muted">
											<a href="<?php echo base_url('masuk/logout') ?>" class="btn btn-primary">logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END INFORMASI SISWA BARU -->
				<hr>
				<!-- START - TABEL INFORMASI LENGKAP SISWA BARU -->
				<div class="row mt-5 justify-content-center">
					<h1 class="mb-3">INFORMASI SISWA BARU</h1>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>NIK</th>
								<th>Nama Siswa</th>
								<th>Tanggal Lahir</th>
								<th>Jenis Kelamin</th>
								<th>Username</th>
								<th>Password</th>
								<th>Status</th>
								<th>Proses</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($jmlhsiswa as $data) :
							?>
								<tr>
									<th><?php echo $data->nik; ?></th>
									<td><?php echo $data->nama_lengkap; ?></td>
									<td><?php echo $data->tgl_lahir; ?></td>
									<td><?php echo $data->gender; ?></td>
									<td><?php echo $data->username; ?></td>
									<td><?php echo $data->password; ?></td>
									<td><?php echo $data->status; ?></td>
									<td>
										<a href="<?php echo base_url('beranda/hapus/' . $data->nik); ?>" class="btn btn-danger">Hapus</a>
										<a href="<?php echo base_url('beranda/ubah/' . $data->nik); ?>" class="btn btn-info">Ubah</a>
									</td>
								</tr>
							<?php
							endforeach;
							?>
						</tbody>
					</table>
					<div class="row">
						<div class="col"><a href="<?php echo base_url('beranda/tambah') ?>" class="btn btn-primary">Tambah</a></div>
						<div class="col"><a href="<?php echo base_url('export') ?>" class="btn btn-primary">Export</a></div>
					</div>
				</div>
			</div>
			<!-- END - TABEL INFORMASI LENGKAP SISWA BARU -->

		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>