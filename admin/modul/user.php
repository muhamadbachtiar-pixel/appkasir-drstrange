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
<div class="container">
                        <center>
                            <?php
                                $sql = mysqli_query($con,"SELECT * FROM tb_admin");
                                $row = mysqli_fetch_array($sql);
                            ?>
                        <div class="card w-50">
                            <div class="card-header">
                                <img src="image/user.png" alt="" width=150px>
                                    <h2 class="mt-"><?=$nama?></h2>
                                    <h6 class="mt-3"><?=$jabatan?></h6>
                                    <a href=""><button class="btn btn-success rounded-pill" type="submit">Perbarui Akun</button></a>
                                    <a href="modul/delete-profile.php?delete=<?=$row['id_admin']?>"><button class="btn btn-danger rounded-pill" type="submit">Hapus Akun</button></a>
                            </div>
                            <div class="card-body">
                            <ul class="nav flex-column text-start">
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left text-dark" aria-current="page" href="#">Overview</a>
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left text-dark" aria-current="page" href="#">Account Setting</a>
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left text-dark" aria-current="page" href="#">Help</a>
                            </li>
                            </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                        </center>
                       
</div>