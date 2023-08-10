<!-- <?php
    // include 'library/koneksi.php';
    ?> -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M10 - WMS</title>
        <link rel="stylesheet" href="../asset/css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- <link href='asset/css/bootstrap.css' rel='stylesheet'> -->
    </head>
    
    <body>
        
        <div class="wrapper">
            <span class="bg-animate"></span>
            <span class="bg-animate2"></span>
    
            <div class="form-box login">
                <h2 class="animation" style="--i:0; --j:17;">Login</h2>
                <form action="#" method="POST">
                    <div class="input-box animation" style="--i:1; --j:18;">
                        <input type="username" name="username" required>
                        <label>Username</label>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box animation" style="--i:2; --j:19;">
                        <input type="password" name="password" required>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <button type="submit" class="btn animation" style="--i:3; --j:20;" name="btn">Login</button>
                    <div class="logreg-link animation" style="--i:4; --j:21;">
                        <p>belum memiliki akun? <a href="#" class="register-link">Daftar</a></p>
                    </div>
                </form>
    
                <?php
                    // if (isset($_POST['btn'])) {
                    //     $user = $_POST['username'];
                    //     $pass = md5($_POST['password']);
                    //     $result = mysqli_query($con, "SELECT*FROM tb_user WHERE username='$user' AND password ='$pass'");
                    //     $row = mysqli_num_rows($result);
                    //     $raql = mysqli_fetch_assoc($result);
    
                    //     if ($row == 1) {
                    //     // $_SESSION['username']=$result['email'];
                    //         Echo "ber<script>alert(' berhasil');window.location.href='admin/index.php'</script>hasil";
                    //     }else{
                    //         echo "<script>alert('tidak berhasil')</script>";
                    //     }
                    // }
                ?>
            </div>
            <div class="info-text login">
                <h2 class="animation" style="--i:0; --j:17;">Mitra10 Indonesia</h2>
                <p class="animation" style="--i:1; --j:18;">enjoy the experience of managing stock with a modern system</p>
            </div>
            
            <div class="form-box register">
                <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
                <form action="#">
                    <div class="input-box animation" style="--i:18; --j:1;">
                        <input type="text" name="username" required>
                        <label>Username</label>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box animation" style="--i:19; --j:2;">
                        <input type="email" name="email" required>
                        <label>Email</label>
                        <i class='bx bxs-envelope' ></i>
                    </div>
                    <div class="input-box animation" style="--i:20; --j:3;">
                        <input type="password" name="password" required>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <button type="submit" class="btn animation" name="submit" style="--i:21; --j:4;">Daftar</button>
                    <div class="logreg-link animation" style="--i:22; --j:5;">
                        <p>sudah memiliki akun? <a href="#" class="login-link">Login</a></p>
                    </div>
    
                    <?php
                        // if (isset($_POST['submit'])) {
                        //     $user=$_POST['username'];
                        //     $email=$_POST['email'];
                        //     $pass=MD5($_POST['password']);
        
                        //     $result = mysqli_query($con, "INSERT INTO tb_user VALUES('','$user','$email','$pass')");
                        //     if ($result) {
                        //         echo "berhasil";
                        //     }else{
                        //         echo "tidak berhasil";
                        //     }
                        // }
                    ?>
                </form>
            </div>
            <div class="info-text register">
                <h2 class="animation" style="--i:17; --j:0;">Mitra10 Indonesia</h2>
                <p class="animation" style="--i:18; --j:1;">Warehouse Management System Native</p>
            </div>
    
        </div>
    
        <script src="../asset/js/script.js"></script>
    
    </body>
    </html>