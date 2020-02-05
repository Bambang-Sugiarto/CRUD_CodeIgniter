<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>LATIHAN CI</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('home'); ?>">CRUD_CI</a>
			<a href="<?= base_url('home/add'); ?>" class="btn btn-primary">Add Data</a>
		</div>
	</nav>

	<div class="container">
		<h5 class="mb-1">CRUD Aplication</h5>
		<small>CRUD / Add Data</small>
		<div class="row mt-3">
			<div class="card col-lg-12 mx-auto" style="width: 18rem;">
				<div class="card-body">
					<form method="post" class="form-horizontal mt-3">
						<div class="form-group">
							<label class="control-label col-sm-2">
								Nama
							</label>
							<div class="col-sm">
								<input type="text" class="form-control" name="nama" value="<?= isset($default['nama']) ? $default['nama'] : "" ?>" Required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">
								Email
							</label>
							<div class="col">
								<input type="email" class="form-control" name="email" value="<?= isset($default['email']) ? $default['email'] : "" ?>" Required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">
								Alamat
							</label>
							<div class="col-sm">
								<input name="alamat" class="form-control" value="<?= isset($default['alamat']) ? $default['alamat'] : "" ?>" Required></input>
							</div>
						</div>
						<center>
							<button name="submit" class="btn btn-primary">Simpan</button>
							<a href="<?= base_url('home'); ?>" class="btn btn-secondary">kembali</a>
						</center>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>