<?php
include "config/koneksi.php";

if ($_POST) {
	
	$matakuliah = $_POST["matakuliah"];
	$sks = $_POST["sks"];
	$id_dosen = $_POST["id_dosen"];

	$sql = "INSERT INTO mata_kuliah (matakuliah, sks, id_dosen) VALUES ('$matakuliah','$sks','$id_dosen')";

	if ($conn->query($sql) === true) {
		header("location: matakuliah.php? success=1");
	} else {
		header("location: matakuliah.php? success=0");
	}
} else {
	header("location: matakuliah.php");
}
exit;


?>