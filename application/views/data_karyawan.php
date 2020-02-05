<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD_CI</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
	<div class="container">
		<a class="navbar-brand" href="">CRUD_CI</a>
		<a href="home/add" class="btn btn-primary">Add Data</a>
	</div>
  </nav>

  <div class="container">
  	<h5 class="mb-1">CRUD Aplication</h5>
    <small>CRUD / CodeIgniter</small>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Karyawan</th>
				<th>Email</th>
				<th>Alamat</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_karyawan as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[nama]</td>
					<td>$row[email]</td>
					<td>$row[alamat]</td>
					<td>
						<a href='home/add/$row[id]' class='btn btn-sm btn-primary'>Add</a>
						<a href='home/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='home/delete/$row[id]' class='btn btn-sm btn-danger'>Delete</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>