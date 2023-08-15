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
<!-- 
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card ger shadow h-100 py-2">
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
                                                    $sql = mysqli_query($con, "SELECT * FROM tb_admin");

                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                            <td><?=$row['nama']?></td>
                                                            <td><?=$row['username']?></td>
                                                            <td><?=$row['password']?></td>
                                                            <td><?=$row['email']?></td>
                                                            <td><?=$row['jabatan']?></td>
                                                            <td class="text-center">
                                                        <i class="fa fa-pencil-square-o text-primary" aria-hidden="true" style="font-size:25px"></i></a><br>
                                                            <i class="fa fa-trash text-danger mt-3" aria-hidden="true" style="font-size:25px"></i></a>
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
                            </div>
                        </div>
                        </div> -->
                        <center>
                        <div class="card w-50">
                            <div class="card-header">
                                <img src="image/user.png" alt="" width=150px>
                                    <h2 class="mt-"><?=$nama?></h2>
                                    <h6 class="mt-3"><?=$jabatan?></h6>
                                    <button class="btn btn-success rounded-pill" type="submit">Update</button>
                                    <button class="btn btn-danger rounded-pill" type="submit">Delete</button>
                            </div>
                            <div class="card-body">
                            <ul class="nav flex-column text-start">
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left" aria-current="page" href="#">Overview</a>
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left" aria-current="page" href="#">Account Setting</a>
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active me-5 text-left" aria-current="page" href="#">Help</a>
                            </li>
                            </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                        </center>
</div>