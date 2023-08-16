<?php   
    include '../library/koneksi.php';
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = mysqli_query($con, "DELETE FROM tb_barang WHERE id_barang = '$id'");
        if ($sql) {
            header('location:http://localhost/appkasir-drstrange/admin/index.php?page=input-barang');
        }
    }
?>