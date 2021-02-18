<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
<div class="pt-5 container">
	@if(session('success'))
	<div class="alert alert-success" role="alert">
		{{session('success')}}
	</div>
	@endif
	<div class="card">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<div class="col-10">
					<h3>Data Siswa</h3>
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data Siswa</button>
				</div>			
			</div>
			<table class="table mt-3 table-hover">
			<thead>
			<th>NISN</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>ID Kelas</th>
			<th>ID SPP</th>
			<th>ID User</th>
			</thead>
			 @foreach($data_siswa as $siswa)
			<tr>
				<td>{{$siswa->nisn}}</td>
				<td>{{$siswa->nis}}</td>
				<td>{{$siswa->nama}}</td>
				<td>{{$siswa->alamat}}</td>
				<td>{{$siswa->no_telp}}</td>
				<td>{{$siswa->id_kelas}}</td>
				<td>{{$siswa->id_spp}}</td>
				<td>{{$siswa->id_user}}</td>
			</tr>
			 @endforeach
			</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Siswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="siswa/create" method="POST">
				{{csrf_field()}}
					<div class="row">
						<div class="col mb-3">
							<label for="nisn" class="form-label">NISN</label>
							<input name="nisn" type="text" class="form-control" id="nisn">
						</div>
						<div class="col mb-3">
							<label for="nis" class="form-label">NIS</label>
							<input name="nis" type="text" class="form-control" id="nis">
						</div>					
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input name="nama" type="text" class="form-control" id="nama">
					</div>
					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat</label>
						<input name="alamat" type="text" class="form-control" id="alamat">
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="no_telp" class="form-label">No Telepon</label>
							<input name="no_telp" type="text" class="form-control" id="no_telp">
						</div>
						<div class="col mb-3">
							<label for="id_kelas" class="form-label">ID Kelas</label>
							<select name="id_kelas" class="form-control form-select" id="id_kelas">
								<option selected> </option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>					
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="id_spp" class="form-label">ID SPP</label>
							<input name="id_spp" type="text" class="form-control" id="id_spp">
						</div>
						<div class="col mb-3">
							<label for="id_user" class="form-label">ID User</label>
							<select name="id_user" class="form-control form-select" id="id_user">
								<option selected> </option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>