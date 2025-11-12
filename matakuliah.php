<?php include 'includes/header.php'; ?>

<?php
$result = $conn->query("SELECT mata_kuliah.*, dosen.nama_dosen FROM mata_kuliah INNER JOIN dosen ON mata_kuliah.id_dosen = dosen.id");
?>

<br>
<h1 align="center" style="background-color: grey;  border-radius: 20px; ">Data Mata Kuliah</h1>
<br>


<table class="table">
    <tr align="center">

        <td>Action</td>
        <td>Mata Kuliah</td>
        <td>Dosen Pengampuh</td>
        <td>SKS</td>
        
    </tr>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr align="center">
                <td>
                    <a href="edit2.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus2.php?id=<?= $row['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('apakah anda yakin?')">Hapus</a>
                </td>
                
                <td><?= $row['matakuliah'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><?= $row['sks'] ?></td>
                
            </tr>
        <?php endwhile ?>
    <?php else: ?>
        <tr>
            <td colspan="6"> Data Belum Tersedia</td>
        </tr>
    <?php endif ?>
</table>

<div>
    <a class="btn btn-primary" href="form2.php">tambah data</a>
</div>

<?php include 'includes/footer.php' ?>