 <?php
 include '../library/koneksi.php';
                        if (isset($_GET['delete'])) {
                            $idt = $_GET['delete'];
                            $sql = mysqli_query($con, "DELETE FROM id_admin WHERE id_admin='$idt'");
                            if ($sql) {
                                echo "<script>alert('Data berhasil di hapus');</script>";
                            } else {
                                echo "tidak berhasil";
                            }
                        }

?>