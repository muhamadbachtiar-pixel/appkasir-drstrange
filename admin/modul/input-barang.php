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
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <?php
            // if (isset($_GET['tambah'])) {
            //     //Mengecek nilai variabel tambah 
            //     if ($_GET['tambah']=='berhasil'){
            //         echo"<div class='alert alert-success'><strong>Berhasil!</strong> barang telah di tambahkan!</div>";
            //     }else if ($_GET['tambah']=='gagal'){
            //         echo"<div class='alert alert-danger'><strong>Gagal!</strong> barang gagal di tambahkan!</div>";
            //     }    
            // }
            if (isset($_GET['edit'])) {
                //Mengecek nilai variabel edit 
                if ($_GET['edit']=='berhasil'){
                    echo"<div class='alert alert-success'><strong>Berhasil!</strong> barang telah di update!</div>";
                }else if ($_GET['edit']=='gagal'){
                    echo"<div class='alert alert-danger'><strong>Gagal!</strong> barang gagal di update!</div>";
                }    
            }
            // if (isset($_GET['hapus'])) {
            //     //Mengecek nilai variabel hapus 
            //     if ($_GET['hapus']=='berhasil'){
            //         echo"<div class='alert alert-success'><strong>Berhasil!</strong> barang telah di hapus!</div>";
            //     }else if ($_GET['hapus']=='gagal'){
            //         echo"<div class='alert alert-danger'><strong>Gagal!</strong> barang gagal di hapus!</div>";
            //     }    
            // }
        ?>
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

                            <label for="exampleInputEmail1" class="form-label mt-3">jenis Barang</label>
                            <select name="jenis" id="" class="form-control">
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori");
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<option value='$row[jenis_brng]'>$row[jenis_brng]</option>";
                                }
                                ?>
                                <!-- <option value="elektronik">Elektronik</option>
                                <option value="kecantikan">Kecantikan</option>
                                <option value="peralatan">Peralatan</option>
                                <option value="kendaraan">Kendaraan</option>
                                <option value="kendaraan">Narkotika</option> -->
                            </select>

                            <label for="exampleInputEmail1" class="form-label mt-3">Deskripsi Barang</label>
                            <input type="text" class="form-control" name="desk" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <label for="exampleInputEmail1" class="form-label mt-3">Jumlah Barang</label>
                            <input type="text" class="form-control" name="jumlah" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <button class="btn btn-primary mt-4" name="submit" type="submit">Masukkan</button>
                        </form>
                        <br>
                        <?php

                        if (isset($_POST['submit'])) {
                            $nama = $_POST['nama'];
                            $name = $_FILES['gambar']['name'];
                            $file = $_FILES['gambar']['tmp_name'];
                            move_uploaded_file($file, "../image/$name");
                            $harga = $_POST['harga'];
                            $jenis = $_POST['jenis'];
                            $desk = $_POST['desk'];
                            $jumlah = $_POST['jumlah'];



                            $sql = mysqli_query($con, "INSERT INTO tb_barang VALUES('','$nama','$name','$harga','$jenis','$desk','$jumlah')");

                            if (!$sql) {
                                echo "tidak";
                            } else {
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
                            <th>Deskripsi Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM tb_barang");

                        while ($row = mysqli_fetch_array($sql)) {
                        ?>

                            <tr>
                                <td><?= $row['nama_brng'] ?></td>
                                <td><img src="../image/<?= $row['gambar_brng'] ?>" alt="" width=150></td>
                                <td><?= $row['harga_brng'] ?></td>
                                <td><?= $row['jenis_brng'] ?></td>
                                <td><?= $row['deskripsi'] ?></td>
                                <td><?= $row['jumlah_brng'] ?></td>
                                <td class="text-center">
                                    <!-- <a href="modul/update-barang.php?update=<?= $row['id_barang'] ?>"></a> <br> -->

                                    <!-- <a href="modul/update-barang.php?update=<?= $row['id_barang'] ?>"><i class="fa fa-pencil-square-o text-primary" aria-hidden="true" style="font-size:25px"></i></a> <br> -->
                                    <a href="index.php?page=input-barang&delete=<?= $row['id_barang'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash text-danger mt-3" aria-hidden="true" style="font-size:25px"></i></a> 
                                    <a href="#"><i class="btn-update fa fa-pencil-square-o text-primary" aria-hidden="true" style="font-size:25px" id_barang="<?= $row['id_barang'] ?>"></i></a> <br>
                                    <!-- <a href="modul/delete-barang.php?delete=<?= $row['id_barang'] ?>"><i class="fa fa-trash text-danger mt-3" aria-hidden="true" style="font-size:25px"></i></a> -->
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                if (isset($_GET['delete'])) {
                    $idt = $_GET['delete'];
                    $sql = mysqli_query($con, "DELETE FROM tb_barang WHERE id_barang = '$idt'");
                    if ($sql) {
                        echo "<script>alert('Data Berhasil Dihapus');window.location.href='index.php?page=input-barang'</script>";
                    }
                }

                ?>
            </div>
            <!-- <div class="card-footer bg-primary">
                </div> -->
        </div>
    </div>

    <!-- Modal Update barang-->
    <div class="modal fade" id="modalupdatebarang">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Bagian header -->
            <div class="modal-header">
                <h4 class="modal-title" id="judul"></h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Bagian body -->
            <div class="modal-body">
                <div id="tampil_data">

                </div>  
            </div>
            <!-- Bagian footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

    <script>
        // update barang
        $('.btn-update').on('click',function(){

        var id_barang = $(this).attr("id_barang");
        var nama_brng = $(this).attr("nama_brng");
        $.ajax({
            url: 'modul/update-barang.php',
            method: 'post',
            data: {id_barang:id_barang},
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Update barang #'+id_barang;
            }
        });
        // Membuka modal
        $('#modalupdatebarang').modal('show');
    });
    </script>

</body>

</html>