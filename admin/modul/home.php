<div class="container-fluid  m-2">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang");
                                $row=mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Data Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah  Barang: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_pelanggan");
                                $row=mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Pelanggan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Pelanggan: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-users" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_admin");
                                $row=mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Pekerja</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Pekerja: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-users" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_supplier");
                                $row=mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Supplier</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 ">Jumlah Supplier: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang WHERE jenis_brng='peralatan'");
                                $row = mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Kategori Peralatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 ">Jumlah Data: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang WHERE jenis_brng='elektronik'");
                                $row = mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Kategori Electronik</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 ">Jumlah Data: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang WHERE jenis_brng='kecantikan'");
                                $row = mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Kategori kecantikan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 ">Jumlah Data: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang WHERE jenis_brng='pakaian'");
                                $row = mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Kategori Pakaian</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 ">Jumlah Data: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-9 col-md-6 mb-4">
                           
                            <div class="card shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <h5 class="text-secondary mt-2"><b>Daftar Member</b></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-secondary rounded-pill" type="submit">Today</button>
                                            <button class="btn btn-secondary rounded-pill" type="submit">Week</button>
                                            <button class="btn btn-secondary rounded-pill" type="submit">Month</button>
                                        </div>
                                    </div>
                                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">foto</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No Telpon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $sql= mysqli_query($con,"SELECT * FROM tb_pelanggan");
                                        while ($row = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                            <th scope="row"><img src="image/user.png" alt="" width=50px></th>
                                            <th scope="row"><?=$row['nama_plnggan']?></th>
                                            <th scope="row"><?=$row['no_tlp']?></th>
                                            <th scope="row"><?=$row['alamat']?></th>
                                            <th scope="row"><?=$row['email']?></th>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                    <tbody>
                                       
                                    </tbody>
                                    </table>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="col-xl-9 col-md-6 mb-4">
                            
                            <div class="card shadow h-100 py-2">
                                <div class="card-body" style="">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <h5 class="text-secondary mt-2"><b>Daftar Supplier</b></h5>
                                        </div>
                                    </div>
                                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">foto</th>
                                        <th scope="col">Nama Supplier</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telpon</th>
                                        <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $sql= mysqli_query($con,"SELECT * FROM tb_supplier");
                                        while ($row = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                            <th scope="row"><img src="image/user.png" alt="" width=50px></th>
                                            <th scope="row"><?=$row['nama_supp']?></th>
                                            <th scope="row"><?=$row['alamat']?></th>
                                            <th scope="row"><?=$row['no_tlp']?></th>
                                            <th scope="row"><?=$row['email']?></th>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                    <tbody>
                                       
                                    </tbody>
                                    </table>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>