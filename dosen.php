<?php include 'includes/header.php'; ?>

<?php
$result = $conn->query("SELECT * FROM dosen");
?>

<br>
<h1 align="center" style="background-color: grey;  border-radius: 20px; ">Data Dosen</h1>
<br>


<table class="table">
    <tr align="center">

        <td>Action</td>
        <td>NIP</td>
        <td>Dosen Pengampuh</td>
        <td>Jenis Kelamin</td>
        
    </tr>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr align="center">
                <td>
                    <a href="edit3.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus3.php?id=<?= $row['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('apakah anda yakin?')">Hapus</a>
                </td>
                
                <td><?= $row['nip'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><?= $row['jenkel'] ?></td>
                
            </tr>
        <?php endwhile ?>
    <?php else: ?>
        <tr>
            <td colspan="6"> Data Belum Tersedia</td>
        </tr>
    <?php endif ?>
</table>

<div>
    <a class="btn btn-primary" href="form3.php">tambah data</a>
</div>

<?php include 'includes/footer.php' ?>