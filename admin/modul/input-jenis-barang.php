<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h6 class="mt-2">Input Jenis Barang</h6>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <label for="">JENIS BARANG</label>
                        <input type="text" class="form-control" name="jenis_brng" id="">
                        <button type="submit" class="btn btn-primary mt-3" name="submit">Input</button>
                        <?php
                        if (isset($_POST['submit'])) {
                            $sql = mysqli_query($con, "INSERT INTO tb_kategori VALUES('','$_POST[jenis_brng]')");
                            if ($sql) {
                                echo "<script>alert('Data berhasil di inputkan');window.location.href='index.php?page=input-jenis-barang';</script>";
                            } else {
                                echo "tidak berhasil";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="table table-sm">
                <div class="card">
                    <div class="card bg-primary text-white" style="text-align: center; padding: auto;">
                        <p>Data Jenis Barang</p>
                    </div>
                    <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Jenis Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 15px;">
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kategori");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td scope="">
                                        <h6><?= $row['id_kategori'] ?></h6>
                                    </td>
                                    <td><?= $row['jenis_brng'] ?></td>
                                    <td>
                                        <a href="index.php?page=input-jenis-barang&delete=delete-kategori&id=<?=$row['id_kategori']?>">
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET['delete']) == 'delete-kategori') {
            $idt = $_GET['id'];
            $sql = mysqli_query($con, "DELETE FROM tb_kategori WHERE id_kategori='$idt'");
            if ($sql) {
                echo "<script>alert('Data berhasil di hapus');window.location.href='index.php?page=input-jenis-barang';</script>";
            } else {
                echo "tidak berhasil";
            }
        }

        ?>
