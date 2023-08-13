<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card ">
            <div class="card-header bg-primary text-center text-white">
                Input Barang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nmbrg" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label mt-3">Harga Barang</label>
                    <input type="text" class="form-control" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label mt-3" name="jenis">jenis Barang</label>
                    <select name="" id="" class="form-control">
                        <option value="elektronik">Elektronik</option>
                        <option value="kecantikan">Kecantikan</option>
                        <option value="peralatan">Peralatan</option>
                        <option value="kendaraan">Kendaraan</option>
                    </select>

                    <label for="exampleInputEmail1" class="form-label mt-3" name="jumlah">Jumlah Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <button class="btn btn-primary mt-4" name="submit" type="submit">Masukkan</button>
                </form>
                
                <?php

                if (isset($_POST['submit'])) {
                    $nama = $_POST['nmbrg'];
                    $harga = $_POST['harga'];
                    $jenis = $_POST['jenis'];
                    $jumlah = $_POST['jumlah'];

                    $sql = mysqli_query($con, "INSERT INTO tb_barang VALUES('$nama','$harga','$jenis','$jumlah')");

                    if ($sql) {
                        echo "berhasil";
                    }else{
                        echo "tidak";
                    }
                }
                    
                ?>
            </div>
            <div class="card-footer bg-primary">
            </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-white text-center bg-primary">
                    Data Berita
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        </tr>
                    </thead>
                    <?php
                        $sql = mysqli_query($con, "SELECT * FROM tb_barang");

                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tbody>
                                <tr>
                                <td><?=$row['nama_brng']?></td>
                                <td><?=$row['harga_brng']?></td>
                                <td><?=$row['jenis_brng']?></td>
                                <td><?=$row['jumlah_brng']?></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                    ?>

                    
                </table>
                </div>
                <div class="card-footer bg-primary">
                </div>
            </div>
        </div>
    </div>
</div>