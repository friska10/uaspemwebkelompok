<?php
    include('../config/conn.php');
    if(isset($_POST['Submit'])) {
        $mhs_id = $_POST["mhs_id"];
        $nama_mhs = $_POST["nama_mhs"];
        $nim_mhs = $_POST["nim_mhs"];
        $jabatan_id= $_POST["jabatan_id"];
        $ttl_mhs = $_POST["ttl_mhs"];
        $divisi = $_POST["divisi"];
        
        error_reporting(E_ERROR | E_PARSE);
        $sql = "UPDATE tbl_mhs SET nama_mhs='$nama_mhs', nim_mhs='$nim_mhs', jabatan_id='$jabatan_id', ttl_mhs='$ttl_mhs' , divisi='$divisi' WHERE mhs_id = $mhs_id"; 
        $result = mysqli_query($conn, $sql);
        if($result) {    
            // Show message when user added
            echo "<script>
                alert('Data berhasil diubah');
                window.location.href='index.php';
                </script>";
        } else {
            echo "<script>
                alert('Data berhasil diubah');
                window.location.href='index.php';
                </script>";
        }
	} else {
        $mhs_id = $_GET['id'];
        $sql = "SELECT * FROM tbl_mhs WHERE mhs_id = $mhs_id LIMIT 1"; 
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM jabatan"; 
        $jabatan = mysqli_query($conn, $sql);
?>

<div class="col-12" style="margin-top: 120px">
    <?php
        foreach($result as $edit) {
            $mhs_id = $edit["mhs_id"];
            $nama_mhs = $edit["nama_mhs"];
            $nim_mhs = $edit["nim_mhs"];
            $jabatan_id= $edit["jabatan_id"];
            $ttl_mhs = $edit["ttl_mhs"];
            $divisi = $edit["divisi"];
        }
    ?>
    <h1>Edit Presensi</h1>
    <form action="update.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="mhs_id" value="<?= $mhs_id ?>">
            <label for="mhs_id">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" value="<?= $nama_mhs ?>">
        </div>

        <div class="form-group">
            <label for="nim_mhs">NIM</label>
            <input type="text" class="form-control" name="nim_mhs" value="<?= $nim_mhs ?>">
        </div>
        
        <div class="form-group">
            <label for="jabatan_id">Jabatan</label>
            <select name="jabatan_id" class="form-control" id="jabatan_id">
                <?php foreach($jabatan as $meeting) { ?>
                    <option value="<?= $meeting['jabatan_id']; ?>" <?= $meeting['jabatan_id'] == $jabatan_id ? 'selected' : '' ?> ><?= $meeting['nama_jabatan']; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <input type="hidden" name="ttl_mhs" value="<?= $ttl_mhs ?>">
            <label for="mhs_id">TTL</label>
            <input type="text" class="form-control" name="ttl_mhs" value="<?= $ttl_mhs ?>">
        </div>

        <div class="form-group">
            <input type="hidden" name="divisi" value="<?= $divisi ?>">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" name="divisi" value="<?= $divisi ?>">
        </div>

        <button type="submit" name="Submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php
    }
    mysqli_close($conn);
?>