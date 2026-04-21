<?php 
<<<<<<< HEAD
// 1. Letakkan session_start di paling atas untuk menghindari error header
session_start();

// Koneksi ke database MariaDb
include './assets/func.php';
$air = new klas_air;
$koneksi = $air->koneksi();
=======
//koneksi ke database MariaDb
include './assets/func.php';
$air = new klas_air;
$koneksi = $air->koneksi();


//masukkan data ke tabel user
// $pass = password_hash("warga", PASSWORD_DEFAULT);
// mysqli_query($koneksi, "INSERT INTO user(username,password,nama,alamat,kota,tlp,level,tipe,status) VALUES ('warga','$pass','warga','Polines','Semarang','02411','warga','-','AKTIF')");
// if(mysqli_affected_rows($koneksi) > 0) echo "Data berhasil masuk...";
// else echo "Data GAGAL masuk...";

>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<<<<<<< HEAD
        <title>Login - SB Admin</title>
        
        <!-- SB Admin CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Custom CSS Purple Pill -->
        <style>
            .btn-purple-pill {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 12px;
                background-color: #0d6efd; /* Ungu tua pekat */
                color: #ffffff !important;
                padding: 12px 30px;
                border-radius: 50px; /* Bentuk Pill/Kapsul */
                text-decoration: none !important;
                font-weight: 700;
                font-size: 14px;
                letter-spacing: 1.2px;
                text-transform: uppercase;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
                border: none;
                width: auto;
                margin-top: 10px;
            }

            .btn-purple-pill:hover {
                background-color: #0d6efd;
                transform: translateY(-3px);
                box-shadow: 0 8px 15px rgba(0, 76, 175, 0.3);
            }

            .btn-purple-pill i {
                font-size: 18px;
            }

            /* Perbaikan tombol login bawaan agar serasi */
            .btn-primary-custom {
                background-color: #0d6efd;
                border-radius: 8px;
                padding: 10px 25px;
                font-weight: 600;
            }
        </style>
=======
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
<<<<<<< HEAD
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php 
                                        if(isset($_POST['tombol'])) {
                                            $username = mysqli_real_escape_string($koneksi, $_POST['user']);
                                            $password = $_POST['password'];

                                            $qc = mysqli_query($koneksi, "SELECT username,password FROM user WHERE username = '$username'");
                                            $dc = mysqli_fetch_row($qc);

                                            if(!empty($dc[0])) {
                                                $pass_cek = $dc[1];
                                                if(password_verify($password, $pass_cek)) {
                                                    $_SESSION['user'] = $username;
                                                    echo "<script>window.location.replace('./login/index.php')</script>";
                                                } else {
                                                    echo "<div class='alert alert-danger alert-dismissible fade show'>
                                                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                                            <strong>Login Gagal!</strong> Password salah.
                                                          </div>";
                                                }
                                            } else {
                                                echo "<div class='alert alert-danger alert-dismissible fade show'>
                                                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                                        <strong>Username!</strong> tidak valid.
                                                      </div>";
                                            }
                                        }
                                        ?>
                                        <form method="post">
=======
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php 
                                        if(isset($_POST['tombol'])) {
                                            $username = $_POST['user'];
                                            $password = $_POST['password'];
                                            // echo "user : $username & pass : $password";

                                            // cek user pd tabel user
                                            $qc = mysqli_query($koneksi, "SELECT username,password FROM user WHERE username = '$username'");
                                            $dc = mysqli_fetch_row($qc);

                                            if(!empty($dc[0])) $user_cek = $dc[0];
                                     
                                            if(!empty($user_cek)) {
                                                //cek password
                                                $pass_cek = $dc[1];

                                                //verifikasi password
                                                if(password_verify ($password,$pass_cek)) {
                                                    //daftarkan session
                                                    session_start();
                                                    $_SESSION['user'] = $username;
                                                    $_SESSION['pass'] = $password;

                                                    //redirect ke dashboard page
                                                    echo "<script>window.location.replace('./login/index.php')</script>";
                                                } else {
                                                    echo "<div class=\"alert alert-danger alert-dismissible fade show\">
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Login!</strong> Salah...
                                                </div>";
                                                }
                                            } else {
                                                echo "<div class=\"alert alert-danger alert-dismissible fade show\">
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Username!</strong> tidak valid...
                                                </div>";

                                            }
                                        }
                                        ?>
                                        <form method="post" class="needs-validation">
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUser" type="text" placeholder="Username" name="user" required/>
                                                <label for="inputUser">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<<<<<<< HEAD
                                                <a class="small text-decoration-none" href="password.html">Forgot Password?</a>
                                                <input type="submit" name="tombol" value="Login" class="btn btn-primary btn-primary-custom">
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- FOOTER CARD FINAL -->
                                    <div class="card-footer text-center py-4 border-0 bg-transparent">
                                        <div class="small mb-3">
                                            <a href="register.html" class="text-muted text-decoration-none">Need an account? Sign up!</a>
                                        </div>
                                        
                                        <!-- Tombol Meet the Developers sesuai Gambar -->
                                        <a href="profile.html" class="btn-purple-pill">
                                            <i class="fas fa-user-circle"></i> 
                                            <span>Meet the Developers</span>
                                        </a>
=======
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input type="submit" name="tombol" value="Login" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<<<<<<< HEAD
            
=======
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
<<<<<<< HEAD
                                <a href="#" class="text-decoration-none">Privacy Policy</a>
                                &middot;
                                <a href="#" class="text-decoration-none">Terms &amp; Conditions</a>
=======
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
<<<<<<< HEAD

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
=======
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></>
        <script src="js/scripts.js"></script>
    </body>
</html>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
