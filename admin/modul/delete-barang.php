<?php   
    include '../library/koneksi.php';
    $jenis_barang = $_GET['delete']; // Anda bisa mengganti ini dengan cara mendapatkan data yang sesuai

    // Menghapus data dari tabel tb_kategori terlebih dahulu (opsional, tergantung pada struktur tabel)
    $query_delete_kategori = "DELETE FROM tb_kategori WHERE jenis_brng = '$jenis_brng'";
    $result_delete_kategori = mysqli_query($con, $query_delete_kategori);

    // Menghapus data dari tabel tb_barang
    $query_delete_barang = "DELETE FROM tb_barang WHERE jenis_brng = '$jenis_brng'";
    $result_delete_barang = mysqli_query($con, $query_delete_barang);

    // Memeriksa hasil penghapusan
    if ($result_delete_barang) {
        header('location:http://localhost/appkasir-drstrange/admin/index.php?page=input-barang');
    } else {
        echo "Terjadi kesalahan saat menghapus data barang: ";
    }

?>