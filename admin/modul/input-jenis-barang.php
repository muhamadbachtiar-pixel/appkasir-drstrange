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
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($con, "INSERT INTO tb_kategori VALUES('','$_POST[jenis_brng]')");
                        if ($sql) {
                            echo "berhasil";
                        }else{
                            echo "tidak berhasil";
                        }
                    }else{

                    }
                        

                    ?>
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
                                        <td scope=""><h6><?=$row['id_kateogori']?></h6></td>
                                        <td><?=$row['jenis_brng']?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
					</table>
        </div>
    </div>
</div>