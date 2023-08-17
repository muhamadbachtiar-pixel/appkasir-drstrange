
<?php
    $id_barang=$_POST["id_barang"];
    // mengambil data barang dengan kode paling besar
    include '../library/koneksi.php';
    $query = mysqli_query($con, "SELECT * FROM tb_barang where id_barang=$id_barang  ");
    $data = mysqli_fetch_array($query); 

    // $judul_artikel=$data['judul_artikel'];
    $nama_barang=$data['nama_brng'];
    $gambar_barang=$data['gambar_brng'];
    $harga_barang=$data['harga_brng'];
    $jenis_barang=$data['jenis_brng'];
    $desk_barang=$data['deskripsi'];
    $jumlah_barang=$data['jumlah_brng'];
    // $id_artikel=$data['id_artikel'];

?>
    <form action="modul/update-barang.php" method="post">
    <div class="form-group">
        <input name="id_barang" value="<?php echo $id_barang; ?>" type="hidden" class="form-control">
        <!-- <input name="id_artikel" value="<?php echo $id_artikel; ?>" type="hidden" class="form-control"> -->
    </div>
    <div class="form-group">
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>
            <input name="nama_brng" value="<?php echo $nama_barang; ?>" type="text" class="form-control" placeholder="Masukan Nama Barang" required>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Gambar Barang:</label>
                    <input name="gambar_brng"  type="file" class="form-control" value="<?php echo $gambar_barang; ?>" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Harga Barang:</label>
                    <input name="harga_brng" value="<?php echo $harga_barang; ?>" type="text" class="form-control" placeholder="Masukan Harga" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Barang:</label>
                    <select class="form-control" name="jenis_brng" value="<?php echo $jenis_barang; ?>" required>
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
                    <input name="deskripsi" value="<?php echo $desk_barang; ?>" type="text" class="form-control" placeholder="Masukan Deskripsi" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jumlah Barang:</label>
                    <input name="jumlah_brng" value="<?php echo $jumlah_barang; ?>" type="text" class="form-control" placeholder="Masukan Jumlah Barang" required>
                </div>
            </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-success">Update komentar</button>
    </form>

<?php
    if (isset($_POST['simpan_edit'])) {
        //Include file koneksi, untuk koneksikan ke database
        include '../library/koneksi.php';
        
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id_barang=input($_POST["id_barang"]);
        $nama_barang=input($_POST["nama_brng"]);
        $gambar_barang=input($_POST["gambar_brng"]);
        $harga_barang=input($_POST["harga_brng"]);
        $jenis_barang=input($_POST["jenis_brng"]);
        $desk_barang=input($_POST["deskripsi"]);
        $jumlah_barang=input($_POST["jumlah_brng"]);

        $name = $_FILES['gambar_brng']['name'];
        $file = $_FILES['gambar_brng']['tmp_name'];
        move_uploaded_file($file, "../image/$name");
        // $id_artikel=input($_POST["id_artikel"]);

        //Query input menginput data kedalam tabel anggota
        $sql="update tb_barang set
        nama_brng='$nama_barang',
        gambar_brng='$gambar_barang',
        harga_brng='$harga_barang',
        jenis_brng='$jenis_barang',
        deskripsi='$desk_barang',
        jumlah_brng='$jumlah_barang'
        where id_barang=$id_barang";
        
        //Mengeksekusi/menjalankan query 
        $hasil=mysqli_query($con,$sql);


        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:../index.php?page=input-barang&edit=berhasil");
        }
        else {
            header("Location:../index.php?page=input-barang&edit=gagal");;

        }
        
    }
    ?>