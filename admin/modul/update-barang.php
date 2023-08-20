
<?php
    include '../library/koneksi.php';

    $sql = mysqli_query($con,"SELECT * FROM tb_barang");
    $row = mysqli_fetch_array($sql);

?>
    <form action="modul/update-barang.php" method="post" type="multipart/form-data">
    <div class="form-group">
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>

            <input name="nama" value="<?=$row['nama_brng'] ?>" type="text" class="form-control" placeholder="Masukan nama" required>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Gambar Barang:</label>

                    <input name="gambar" type="file" class="form-control" value="<?=$row['gambar_brng'] ?>" required>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Harga Barang:</label>

                    <input name="harga" value="<?=$row['harga_brng'] ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Barang:</label>

                    <select class="form-control" name="jenis" value="<?=$row['jenis_brng'] ?>" required>
                    <?php
                        $sql = mysqli_query($con, "SELECT * FROM tb_kategori");
                        while ($row2 = mysqli_fetch_array($sql)) {
                            echo "<option value='$row2[jenis_brng]'>$row2[jenis_brng]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Deskripsi Barang:</label>
                    <input name="desk" type="text" class="form-control" placeholder="Masukan email"  value="<?=$row['deskripsi'] ?>" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jumlah Barang:</label>
                    <input name="jumlah" value="<?=$row['jumlah_brng'] ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-success">Update komentar</button>
    </form>

<?php
    if (isset($_POST['simpan_edit'])) {

        $nama = $_POST['nama'];
        $name = $_FILES['gambar']['name'];
        $file = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file,"../image/$name");
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];
        $desk = $_POST['desk'];
        $jumlah = $_POST['jumlah']; 
        if (empty($_FILES['gambar']['name'])) {
            $sql = mysqli_query($con, "UPDATE tb_barang SET nama_brng = '$nama', gambar_brng = '$name', harga_brng = '$harga', jenis_brng = '$jenis', deskripsi = '$desk' , jumlah_brng = '$jumlah'");
        }
    }
?>