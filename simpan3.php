<?php
include "config/koneksi.php";

if ($_POST) {

    $nip = $_POST["nip"];
    $nama_dosen = $_POST["nama_dosen"];
    $jenkel = $_POST["jenkel"];

    $sql = "INSERT INTO dosen (nip, nama_dosen, jenkel) VALUES ('$nip','$nama_dosen','$jenkel')";

    if ($conn->query($sql) === true) {
        header("location: dosen.php? success=1");
    } else {
        header("location: dosen.php? success=0");
    }
} else {
    header("location: dosen.php");
}
exit;


?>