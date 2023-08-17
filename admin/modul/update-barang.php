
<?php
    $id_barang=$_POST["id_barang"];
    // mengambil data barang dengan kode paling besar
    include '../library/koneksi.php';
    $query = mysqli_query($con, "SELECT * FROM tb_barang where id_barang=$id_barang  ");
    $data = mysqli_fetch_array($query); 

    // $judul_artikel=$data['judul_artikel'];
    $nama_barang=$data['nama_brng'];
    $gambar_brng=$data['gambar_brng'];
    $harga_barang=$data['harga_brng'];
    $jenis_barang=$data['jenis_brng'];
    $desk_barang=$data['deskripsi'];
    $jumlah_barang=$data['jumlah_brng'];
    // $id_artikel=$data['id_artikel'];

?>
    <form action="komentar/edit.php" method="post">
    <div class="form-group">
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>
            <input name="nama" value="<?php echo $nama_barang; ?>" type="text" class="form-control" placeholder="Masukan nama" required>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Gambar Barang:</label>
                    <input name="gambar"  type="file" class="form-control" value="<?php echo $gambar_brng; ?>" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Harga Barang:</label>
                    <input name="harga" value="<?php echo $harga_barang; ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Barang:</label>
                    <select class="form-control" name="jenis" value="<?php echo $jenis_barang; ?>" required>
                    <?php
                        $sql = mysqli_query($con, "SELECT * FROM tb_kategori");
                        while ($row = mysqli_fetch_array($sql)) {
                            echo "<option value='$row[jenis_brng]'>$row[jenis_brng]</option>";
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
                    <input name="harga" value="<?php echo $desk_barang; ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Deskripsi Barang:</label>
                    <input name="harga" value="<?php echo $jumlah_barang; ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-success">Update komentar</button>
    </form>

<?php
    if (isset($_POST['simpan_edit'])) {
        //Include file koneksi, untuk koneksikan ke database
        include '../../lib/koneksi.php';
        
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //Query input menginput data kedalam tabel anggota
        
        //Mengeksekusi/menjalankan query 
        $hasil=mysqli_query($con, "UPDATE tb_barang SET 
                                    ");


        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:../index.php?halaman=ulasan&edit=berhasil");
        }
        else {
            header("Location:../index.php?halaman=ulasan&edit=gagal");;

        }
        
    }
    ?>