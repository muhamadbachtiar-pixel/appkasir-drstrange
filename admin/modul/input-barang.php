<?php
include '../library/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
</head>
<body>
<div class="container-fluid">
    <h2>DATA BARANG</h2>
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Masukkan Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">gambar Barang</label>
                    <input type="file" class="form-control" name="gambar" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label mt-3">Harga Barang</label>
                    <input type="text" class="form-control" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label mt-3" >jenis Barang</label>
                    <select name="jenis" id="" class="form-control">
                        <option value="elektronik">Elektronik</option>
                        <option value="kecantikan">Kecantikan</option>
                        <option value="peralatan">Peralatan</option>
                        <option value="kendaraan">Kendaraan</option>
                    </select>

                    <label for="exampleInputEmail1" class="form-label mt-3" >Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlah" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <button class="btn btn-primary mt-4" name="submit" type="submit">Masukkan</button>
                </form>
                <br>
                <?php

                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $name = $_FILES['gambar']['name']; 
                    $file = $_FILES['gambar']['tmp_name']; 
                    move_uploaded_file($file,"../image/$name");
                    $harga = $_POST['harga'];
                    $jenis = $_POST['jenis'];
                    $jumlah = $_POST['jumlah'];
                    


                    $sql = mysqli_query($con, "INSERT INTO tb_barang VALUES('','$nama','$name','$harga','$jenis','$jumlah')");

                    if ($sql) {
                        echo "berhasil";
                    }else{
                        echo "tidak";
                    }
                }
                    
                ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            <div class="card">
                <!-- <div class="card-header text-white text-center bg-primary">
                    Data Barang
                </div> -->
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Gambar Barang</th>
                                <th>Harga Barang</th>
                                <th>jenis Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Setting</th>
                            </tr>
                        </thead>
                        
                        <?php
                                        $sql = mysqli_query($con, "SELECT * FROM tb_barang");

                                        while ($row = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tbody>
                                                <tr>
                                                <td><?=$row['nama_brng']?></td>
                                                <td><img src="image/<?=$row['gambar_brng']?>" alt="" width=150></td>
                                                <td><?=$row['harga_brng']?></td>
                                                <td><?=$row['jenis_brng']?></td>
                                                <td><?=$row['jumlah_brng']?></td>
                                                <td class="text-center">
                                                <a href=""><i class="fa fa-pencil-square-o text-primary" aria-hidden="true" style="font-size:25px"></i></a> <br>
                                                <a href="modul/delete-barang.php?delete=<?=$row['id_barang']?>"><i class="fa fa-trash text-danger mt-3" aria-hidden="true" style="font-size:25px"></a></i>
                                                </td>
                                                </tr>
                                            </tbody>
                                            <?php
                                        }
                                    ?>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer bg-primary">
                </div> -->
            </div>
</div>

</body>
</html>