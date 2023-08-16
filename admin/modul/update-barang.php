
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
    $harga_barang=$data['harga_brng'];
    // $id_artikel=$data['id_artikel'];

?>
    <form action="komentar/edit.php" method="post">
    <div class="form-group">
            <input name="id_komentar" value="<?php echo $id_komentar; ?>" type="hidden" class="form-control">
            <input name="id_artikel" value="<?php echo $id_artikel; ?>" type="hidden" class="form-control">
        </div>
        <!-- <div class="form-group">
            <label>Artikel:</label>
            <input name="nama" value="<?php echo $judul_artikel; ?>" type="text" class="form-control" disabled>
        </div> -->
        <div class="form-group">
            <label>Nama Barang:</label>
            <input name="nama" value="<?php echo $nama_barang; ?>" type="text" class="form-control" placeholder="Masukan nama" required>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Gambar Barang:</label>
                    <input name="email" value="<?php echo $gambar_brng; ?>" type="file" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Harga Barang:</label>
                    <input name="email" value="<?php echo $harga_barang; ?>" type="text" class="form-control" placeholder="Masukan email" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Barang:</label>
                    <select name="email" value="<?php echo $jenis_barang; ?>" required>
                        <option value="elektronik">Elektronik</option>
                        <option value="kecantikan">Kecantikan</option>
                        <option value="peralatan">Peralatan</option>
                        <option value="kendaraan">Kendaraan</option>
                        <option value="kendaraan">Narkotika</option>
                    </select>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Komentar:</label>
                    <textarea name="isi_komentar" class="form-control" rows="5"><?php echo $isi_komentar; ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label>Status:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="radio" <?php if ($data['status_komentar']==1) echo "checked"; ?> class="form-check-input" name="status" value="1">Publish
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="radio" <?php if ($data['status_komentar']==0) echo "checked"; ?> class="form-check-input" name="status" value="0">Tidak dipublish
                        </label>
                    </div>
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
        $id_komentar=input($_POST["id_komentar"]);
        $nama=input($_POST["nama"]);
        $email=input($_POST["email"]);
        $isi_komentar=input($_POST["isi_komentar"]);
        $id_artikel=input($_POST["id_artikel"]);
        $status=input($_POST["status"]);


        //Query input menginput data kedalam tabel anggota
        $sql="update komentar set
        nama='$nama',
        email='$email',
        isi_komentar='$isi_komentar',
        id_artikel='$id_artikel',
        status_komentar='$status'
        where id_komentar=$id_komentar";

        //Mengeksekusi/menjalankan query 
        $hasil=mysqli_query($con,$sql);


        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:../index.php?halaman=ulasan&edit=berhasil");
        }
        else {
            header("Location:../index.php?halaman=ulasan&edit=gagal");;

        }
        
    }
    ?>