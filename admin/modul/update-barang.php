
<?php
    include '../library/koneksi.php';

    $id_barang=$_POST["id_barang"];
    $sql = mysqli_query($con,"SELECT * FROM tb_barang where id_barang=$id_barang");
    $row = mysqli_fetch_array($sql);

?>
    <form action="modul/update-barang.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id_barang" value="<?=$row['id_barang'] ?>">
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>

            <input name="nama" value="<?=$row['nama_brng'] ?>" type="text" class="form-control" placeholder="Masukan Nama Barang" required>

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

                    <input name="harga" value="<?=$row['harga_brng'] ?>" type="text" class="form-control" placeholder="Masukan Harga" required>
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
                    <input name="desk" type="text" class="form-control" placeholder="Masukan Deskripsi"  value="<?=$row['deskripsi'] ?>" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jumlah Barang:</label>
                    <input name="jumlah" value="<?=$row['jumlah_brng'] ?>" type="text" class="form-control" placeholder="Masukan Jumlah" required>
                </div>
            </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-success">Update barang</button>
    </form>

    <?php
    include '../library/koneksi.php';

    if (isset($_POST['simpan_edit'])) {
        $id_barang = $_POST['id_barang']; // mengambil ID barang yang ingin diupdate
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];
        $desk = $_POST['desk'];
        $jumlah = $_POST['jumlah']; 

        // Periksa apa ada gambar yang diaplud
        if (!empty($_FILES['gambar']['name'])) {
            $name = $_FILES['gambar']['name'];
            $file = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($file,"../image/$name");
        }

        if (empty($_FILES['gambar']['name'])) {
            $sql = mysqli_query($con, "UPDATE tb_barang SET nama_brng = '$nama', harga_brng = '$harga', jenis_brng = '$jenis', deskripsi = '$desk', jumlah_brng = '$jumlah' WHERE id_barang = '$id_barang'");
        } else {
            $sql = mysqli_query($con, "UPDATE tb_barang SET nama_brng = '$nama', gambar_brng = '$name', harga_brng = '$harga', jenis_brng = '$jenis', deskripsi = '$desk', jumlah_brng = '$jumlah' WHERE id_barang = '$id_barang'");
        }

        if ($sql) {
            header("Location:../index.php?page=input-barang&edit=berhasil");
        } else {
            header("Location:../index.php?page=input-barang&edit=gagal");;
        }
    }

    // $sql = mysqli_query($con, "SELECT * FROM tb_barang");
    // $row = mysqli_fetch_array($sql);
?>