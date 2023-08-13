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
                        <div class="col-xl-3 col-md-6 mb-4">
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_barang");
                                $row=mysqli_num_rows($sql);
                            ?>
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah <br> Barang: <?php echo $row;?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size:40px;"></i>
                                        <div class="mt-3">
                                            <a class="nav-link"href="?page=detail&"><i class="fa fa-arrow-circle-right text-danger ms-3" style="font-size:30px;" aria-hidden="true"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
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
                        <div class="col-xl-3 col-md-6 mb-4">
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
                    </div>
                </div>