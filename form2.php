<?php include 'includes/header.php'; ?>
<?php
$dosen = $conn->query("SELECT * FROM dosen");
?>
<div class="container">
		<form action="simpan2.php" method="POST">
			<div class="row">

				<div class="col-md-4">
					<label>Mata Kuliah</label>
					<input type="text" name="matakuliah" id="matakuliah" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Dosen Pengampuh</label>
					<select class="form-control" name="id_dosen" id="id_dosen">
						<?php while ($row = $dosen->fetch_assoc()): ?>
							<option value="<?= $row['id'] ?>"><?= $row['nama_dosen'] ?></option>
						<?php endwhile ?>
					</select>
				</div>


				<div class="col-md-4">
					<label>SKS</label>
					<input type="number" name="sks" id="sks" class="form-control">
				</div>
			</div>

			<div class="row mt-5">
				<button type="sumbit" class="btn btn-success">Simpan</button>
			</div>
		</form>
	</div>

<?php include 'includes/footer.php'; ?>