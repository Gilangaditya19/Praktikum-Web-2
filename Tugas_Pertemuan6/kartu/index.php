<?php 
    require_once '../dbkoneksi.php';
?>

<?php 
    $sql = "SELECT * FROM kartu";
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="create.php" role="button">Create Kartu</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $id = 1;
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['diskon']?></td>
            <td><?=$row['iuran']?></td>
            <td>
                <a class="btn btn-primary" href="view.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="create.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data kartu <?=$row['kode']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            $id++;   
            } 
        ?>
    </tbody>
</table>