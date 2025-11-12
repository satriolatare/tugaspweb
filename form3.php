<?php include 'includes/header.php'; ?>

<div class="container">
		<form action="simpan3.php" method="POST">
			<div class="row">

				<div class="col-md-4">
					<label>NIP</label>
					<input type="number" name="nip" id="nip" class="form-control">
				</div>


				<div class="col-md-4">
					<label>Nama Dosen</label>
					<input type="text" name="nama_dosen" id="nama_dosen" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Jenis Kelamin</label>
					<input type="text" name="jenkel" id="jenkel" class="form-control">
				</div>
			</div>

			<div class="row mt-5">
				<button type="sumbit" class="btn btn-success">Simpan</button>
			</div>
		</form>
	</div>

<?php include 'includes/footer.php'; ?>