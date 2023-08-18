
<?php
    include '../library/koneksi.php';
<<<<<<< HEAD
    $sql = mysqli_query($con,"SELECT * FROM tb_barang");
    $row = mysqli_fetch_array($sql);
=======
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

>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
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
<<<<<<< HEAD
            <input name="nama" value="<?=$row['nama_brng'] ?>" type="text" class="form-control" placeholder="Masukan nama" required>
=======
            <input name="nama_brng" value="<?php echo $nama_barang; ?>" type="text" class="form-control" placeholder="Masukan Nama Barang" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Gambar Barang:</label>
<<<<<<< HEAD
                    <input name="gambar"  type="file" class="form-control" value="<?=$row['gambar_brng'] ?>" required>
=======
                    <input name="gambar_brng"  type="file" class="form-control" value="<?php echo $gambar_barang; ?>" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Harga Barang:</label>
<<<<<<< HEAD
                    <input name="harga" value="<?=$row['harga_brng'] ?>" type="text" class="form-control" placeholder="Masukan email" required>
=======
                    <input name="harga_brng" value="<?php echo $harga_barang; ?>" type="text" class="form-control" placeholder="Masukan Harga" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Barang:</label>
<<<<<<< HEAD
                    <select class="form-control" name="jenis" value="<?=$row['jenis_brng'] ?>" required>
=======
                    <select class="form-control" name="jenis_brng" value="<?php echo $jenis_barang; ?>" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
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
<<<<<<< HEAD
                    <input name="desk" type="text" class="form-control" placeholder="Masukan email"  value="<?=$row['deskripsi'] ?>" required>
=======
                    <input name="deskripsi" value="<?php echo $desk_barang; ?>" type="text" class="form-control" placeholder="Masukan Deskripsi" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jumlah Barang:</label>
<<<<<<< HEAD
                    <input name="jumlah" value="<?=$row['jumlah_brng'] ?>" type="text" class="form-control" placeholder="Masukan email" required>
=======
                    <input name="jumlah_brng" value="<?php echo $jumlah_barang; ?>" type="text" class="form-control" placeholder="Masukan Jumlah Barang" required>
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
                </div>
            </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-success">Update komentar</button>
    </form>

<?php
    include '../lib/koneksi.php';
    if (isset($_POST['simpan_edit'])) {
<<<<<<< HEAD
        $nama = $_POST['nama'];
        $name = $_FILES['gambar']['name'];
        $file = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file,"../image/$nama");
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];
        $desk = $_POST['desk'];
        $jumlah = $_POST['jumlah']; 
        if (empty($_FILES['gambar']['name'])) {
            $sql = mysqli_query($con, "UPDATE tb_barang SET nama_brng = '$nama', gambar_brng = '$name', harga_brng = '$harga', jenis_brng = '$jenis', deskripsi = '$desk' , jumlah_brng = '$jumlah'");
        }
        // $sql = mysqli_query($con,"UPDATE tb_barang SET nama_brng='$nama',gambar_brng='$file',harga_brng='$harga',jenis_brng='$jenis',deskripsi='$desk',jumlah_brng='$jumlah' WHERE '");
        // if ($sql) {
        //     header("Location:../index.php?halaman=ulasan&edit=berhasil");
        // }
        // else {
        //     header("Location:../index.php?halaman=ulasan&edit=gagal");;

        // }
=======
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
>>>>>>> 18a5a115c662b831d540f6dc55a4faa60d092fb9
        
    }
?>