 <?php
 include '../library/koneksi.php';
                        if (isset($_GET['delete'])) {
                            $idt = $_GET['delete'];
                            $sql = mysqli_query($con, "DELETE FROM tb_admin WHERE id_admin='$idt'");
                            if ($sql) {
                                // header('location:../index.php');
                                // if (!isset($_GET['jabatan'])) {
                                //     include '../login/login.php';
                                // }
                                session_start();
                                session_destroy();
                                echo "<script>alert('Akun Anda Berhasil Dihapus');window.location.href='../index.php';</script>";

                            } else {
                                echo "tidak berhasil";
                            }
                        }

?>