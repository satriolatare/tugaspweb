<?php include 'includes/header.php'; ?>
<?php
$id = $_GET['id'];

$nama_dosen = $conn->query("SELECT * FROM dosen");

if (isset($id)) {
    $sql = "SELECT * FROM mata_kuliah WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "data tidak ditemukan";
        include 'includes/footer.php';
        exit;
    }
    $nilai = $result->fetch_assoc();
}
if ($_POST) {
    
    $matakuliah = $_POST["matakuliah"];
    $sks = $_POST["sks"];
    $id_dosen = $_POST["id_dosen"];

    $sql = "UPDATE mata_kuliah SET id_dosen='$id_dosen',
    matakuliah='$matakuliah', sks=$sks WHERE id=$id";

    if ($conn->query($sql) === true) {
        header("location: matakuliah.php? success=1");
    } else {
        header("location: matakuliah.php? success=0");
    }
}


?>
<div class="container">
    <form action="" method="POST">
        <div class="row">

            <div class="col-md-4">
                <label>Mata Kuliah</label>
                <input type="text" name="matakuliah" id="matakuliah" class="form-control"
                    value="<?= $nilai['matakuliah'] ?>">
            </div>

            <div class="col-md-4">
					<label>Dosen Pengampuh</label>
					<select class="form-control" name="id_dosen" id="id_dosen">
						<?php while ($row = $nama_dosen->fetch_assoc()): ?>
							<option value="<?= $row['id'] ?>" <?=($row['id'] == $nilai['id_dosen']) ? 'selected' : '' ?> ><?= $row['nama_dosen'] ?> </option>
						<?php endwhile ?>
					</select>
				</div>

            <div class="col-md-4">
                <label>SKS</label>
                <input type="number" name="sks" id="sks" class="form-control" value="<?= $nilai['sks'] ?>">
            </div>
        </div>

        <div class="row mt-5">
            <button type="sumbit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>




<?php include 'includes/footer.php'; ?>