<?php include 'includes/header.php'; ?>
<?php
$matakuliah = $conn->query("SELECT * FROM mata_kuliah");
?>
<div class="container">
	<form action="simpan.php" method="POST">
		<div class="row">
			<div class="col-md-4">
				<label>NIM</label>
				<input type="number" name="nim" id="nim" class="form-control">
			</div>

			<div class="col-md-4">
				<label>NAMA</label>
				<input type="text" name="nama" id="nama" class="form-control">
			</div>

			
				<div class="col-md-4">
					<label>Mata Kuliah</label>
					<select class="form-control" name="id_mata_kuliah" id="id_mata_kuliah">
						<?php while ($row = $matakuliah->fetch_assoc()): ?>
							<option value="<?= $row['id'] ?>"><?= $row['matakuliah'] ?></option>
						<?php endwhile ?>
					</select>
				</div>
			

			<div class="col-md-4">
				<label>TUGAS</label>
				<input type="number" name="tugas" id="tugas" class="form-control">
			</div>


			<div class="col-md-4">
				<label>UTS</label>
				<input type="number" name="uts" id="uts" class="form-control">
			</div>

			<div class="col-md-4">
				<label>UAS</label>
				<input type="number" name="uas" id="uas" class="form-control">
			</div>
		</div>

		<div class="row mt-5">
			<button type="sumbit" class="btn btn-success">Simpan</button>
		</div>
	</form>
</div>




<?php include 'includes/footer.php'; ?>