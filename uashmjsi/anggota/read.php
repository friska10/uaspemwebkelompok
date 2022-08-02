<?php
    include('../config/conn.php');

    $sql = "SELECT * FROM tbl_mhs JOIN jabatan ON tbl_mhs.jabatan_id = jabatan.jabatan_id"; 
    $results = mysqli_query($conn, $sql);
?>

<div class="col-12" style="margin-top: 120px">

    <div class="row mt-3">
        <div class="col-12">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($results as $result) { ?>
                    <tr>
                        <td>#</td>
                        <td>
                            <a href="index.php?page=detail&id=<?= $result['mhs_id']; ?>">
                                <?= $result["nama_mhs"]?>
                            </a>
                        </td>
                        <td>
                            <?= $result["nim_mhs"] ?>
                        </td>
                        <td>
                            <?= $result["nama_jabatan"] ?>
                        </td>
                        <td>
                            <?= $result["ttl_mhs"] ?>
                        </td>
                        <td>
                            <?= $result["divisi"] ?>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="index.php?page=edit&id=<?= $result['mhs_id']; ?>">
                                    Edit
                                </a>
                                <a href="delete.php?id=<?= $result['mhs_id'] ?>">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>