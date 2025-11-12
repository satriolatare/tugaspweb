<?php 
include 'config/koneksi.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM nilai_mahasiswa WHERE id=$id";

	if ($conn->query($sql) === true){
		header ("Location:pwphp.php?success=1");
	}else{
		header ("Location:pwphp.php?success=0");
	}
}else{
		header ("Location:pwphp.php");
}

?>
