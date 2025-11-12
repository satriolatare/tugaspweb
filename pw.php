<?php

$nama = 'Mohamad Satrio Latare';
$nim = '531424050';
$tugass = 90;
$uts = 80;
$uas = 90;

$nilaiakhir = (0.3 * $tugass) + (0.3 * $uts) + (0.3 * $uas);

if ($nilaiakhir > 70) {
	$keterangan = 'Lulus';


} else {
	$keterangan = 'lulus';
}

// echo 'Nama :' .$nama. '<br>';
// echo 'Nim :' .$nim.'<br>';
// echo 'Nilai Tugas : ' .$tugass. '<br>';
// echo 'Nilai uts : ' .$uts. '<br>';
// echo 'Nilai uas : ' .$uas. '<br>';

// echo 'Nilai Akhir : ' . $nilaiakhir . '<br>';

// echo 'kamu Dinyatakan ' .$keterangan. '<br>'; 

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TUGAS 3</title>
</head>

<body style="background-color: blanchedalmond;">
	
	<h1 align="center" style="background-color: dimgray ; border-radius: 10px; padding: 10px;">
		LAPORAN AKHIR</h1>
	<table border="30" align="center" style="background-color: white;">
		<tr>
			<td align="center">Nama</td>
			<td align="center">Nim</td>
			<td>Tugas</td>
			<td>UTS</td>
			<td>UAS</td>
			<td>Nilai Akhir</td>
			<td>Keterangan</td>
		</tr>
		<tr>
			<td><?= $nama ?></td>
			<td><?php echo $nim ?></td>
			<td align="center"><?php echo $tugass ?></td>
			<td align="center"><?php echo $uts ?></td>
			<td align="center"><?php echo $uas ?></td>
			<td align="center"><?php echo $nilaiakhir ?></td>
			<td align="center"><?php echo $keterangan ?></td>
		</tr>
	</table>

</body>

</html>