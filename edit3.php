<?php include 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
if (isset($id)) {
    $sql = "SELECT * FROM dosen WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "data tidak ditemukan";
        include 'includes/footer.php';
        exit;
    }
    $nilai = $result->fetch_assoc();
}
if ($_POST) {
    
    $nip = $_POST["nip"];
    $nama_dosen = $_POST["nama_dosen"];
    $jenkel = $_POST["jenkel"];

    $sql = "UPDATE dosen SET nip=$nip, nama_dosen='$nama_dosen', jenkel='$jenkel' WHERE id=$id";

    if ($conn->query($sql) === true) {
        header("location: dosen.php? success=1");
    } else {
        header("location: dosen.php? success=0");
    }
}


?>
<div class="container">
    <form action="" method="POST">
        <div class="row">

				<div class="col-md-4">
					<label>NIP</label>
					<input type="number" name="nip" id="nip" class="form-control" value="<?= $nilai['nip'] ?>">
				</div>


				<div class="col-md-4">
					<label>Nama Dosen</label>
					<input type="text" name="nama_dosen" id="nama_dosen" class="form-control"  value="<?= $nilai['nama_dosen'] ?>">
				</div>

				<div class="col-md-4">
					<label>Jenis Kelamin</label>
					<input type="text" name="jenkel" id="jenkel" class="form-control" value="<?= $nilai['jenkel'] ?>">
				</div>
			</div>

        <div class="row mt-5">
            <button type="sumbit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>




<?php include 'includes/footer.php'; ?>