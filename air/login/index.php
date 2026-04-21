<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
session_start ();
if(empty($_SESSION['user']) && empty($_SESSION['pass'])) {
    echo "<script>window.location.replace('../index.php')</script>";
}

//koneksi ke database MariaDb
include '../assets/func.php';
$air = new klas_air;
$koneksi = $air->koneksi();
$dt_user = $air->dt_user($_SESSION['user']);
$level = $dt_user[2];


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
<<<<<<< HEAD
        <title>Dashboard - Sistem Manajemen Pemakaian Air</title>
=======
        <title>Dashboard - SB Admin</title>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<<<<<<< HEAD
        <script src="../js/air.js"></script>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Sistem Pemakaian Air</a>
=======
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Dashboard
                            </a>
                            <?php 
                            if ($level=="admin") {
                                ?>
                                <a class="nav-link" href="index.php?p=user">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Manajemen User
                            </a>
                                <a class="nav-link" href="index.php?p=pemakaian_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Lihat Pemakaian Warga
                            </a>
                                <a class="nav-link" href="index.php?p=pembayaran_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Pembayaran Warga
                            </a>
                                <a class="nav-link" href="index.php?p=ubah_datameter_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Ubah Datameter Warga
                            </a>
                            <?php 
                            } 
                            elseif($level=="bendahara") {
                            ?>
                                <a class="nav-link" href="index.php?p=pembayaran_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Pembayaran Warga
                            </a>
                                <a class="nav-link" href="index.php?p=ubah_datameter_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Ubah Datameter Warga
                            </a>
<<<<<<< HEAD
                                <a class="nav-link" href="index.php?p=manajemen_tarif_air">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Manajemen Tarif Air
                            </a>
                                <a class="nav-link" href="index.php?p=tagihan_warga_bendahara">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Lihat Tagihan Warga
                            </a>
                            <?php
                            }
                             elseif($level=="petugas") {
=======
                            <?php
                            }
                             elseif($level=="Petugas") {
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            ?>
                                <a class="nav-link" href="index.php?p=ubah_datameter_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Ubah Datameter Warga
                            </a>
<<<<<<< HEAD
                                <a class="nav-link" href="index.php?p=lihat_pemakaian_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Lihat Pemakaian Air
                            </a>
                      
                            <?php
                             }
                             elseif($level=="warga") {
=======
                            <?php
                             }
                             elseif($level=="Warga") {
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            ?>
                                <a class="nav-link" href="index.php?p=pemakaian_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Lihat Pemakaian Warga
                            </a>
<<<<<<< HEAD
                            <a class="nav-link" href="index.php?p=lihat_tagihan_warga">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-spin text-success"></i></div>
                                Lihat Tagihan Warga
                            </a>
=======
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            <?php
                             }
                            ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
<<<<<<< HEAD
                        <div class="small"><i class="fa-regular fa-user fa-flip text-warning"></i> Logged in as : <?php echo $dt_user[2]?></div>
=======
                        <div class="small"><i class="fa-regular fa-user fa-flip text-warning"></i> Logged in as: <?php echo $dt_user[2]?></div>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                        <?php echo $dt_user[0].' ('.$dt_user [1]. ')'; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php
                        // echo $_SERVER['REQUEST_URI'];
                        $e=explode("=",$_SERVER['REQUEST_URI']);
                        // echo "<BR> [0]: $e[0] --> [1]: $e[1]";
                        if(!empty($e[1])) {
<<<<<<< HEAD
                            if($e[1]=="user" || $e[1]=="user_edit&user") {
=======
                            if($e[1]=="user") {
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                                $h1="Manajemen User";
                                $li="Menu Untuk CRUD User";
                            }
                            elseif($e[1]=="pemakaian_warga") {
                                $h1="Lihat Pemakaian Warga";
                                $li="Lihat Data Pemakaian Air Warga";
                            }
                            elseif($e[1]=="pembayaran_warga") {
                                $h1="Lihat Pembayaran Warga";
                                $li="Lihat Data Pembayaran Air Warga";
                            }
                            elseif($e[1]=="ubah_datameter_warga") {
                                $h1="Ubah Datameter Warga";
<<<<<<< HEAD
                                $li="Ubah Data Meter Warga";
                            }
                            elseif($e[1]=="manajemen_tarif_air") {
                                $h1="Manajemen Tarif Air";
                                $li="Menu Untuk CRUD Tarif Air";
                            }
                            elseif($e[1]=="tagihan_warga_bendahara") {
                                $h1="Lihat Tagihan Warga";
                                $li="Lihat Data Tagihan Air Warga";
                            }
                            elseif($e[1]=="lihat_pemakaian_warga") {
                                $h1="Lihat Pemakaian Air Warga";
                                $li="Lihat Data Pemakaian Air Warga";
                            }
                            elseif($e[1]=="lihat_tagihan_warga") {
                                $h1="Lihat Tagihan Air Warga";
                                $li="Lihat Data Tagihan Air Warga";
                            }

=======
                                $li="Ubah Air Warga";
                            }
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                        }
                        else {
                            $h1="Dashboard";
                            $li="Dashboard";
                        }
                        ?>
                        <h1 class="mt-4"><?php echo $h1 ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $li ?></li>
                        </ol>
                        <?php
                        // echo "sesi user: " . $_SESSION['user'] . " sesi pass: " . $_SESSION['pass']; 
<<<<<<< HEAD
                        ?>
                        <div class="row" id="sumary">
=======
                            ?>
                        <div class="row">
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="row" id="chart">
=======
                        <div class="row">
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD

                        <?php 
                        if (isset($_POST['tombol'])) {
                            $t = $_POST['tombol'];
                            if ($t == "user_add") {
                                $user=$_POST['username'];
                                $pass= password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $pass2= $_POST['password'];
                                $nama=$_POST['nama'];
                                $alamat=$_POST['alamat'];
                                $kota=$_POST['kota'];
                                $tlp=$_POST['tlp'];
                                $level=$_POST['level'];
                                $tipe=$_POST['tipe'];
                                $status=$_POST['status'];
                                
                                //cek username sudah ada atau belum
                                $qc= mysqli_query($koneksi,"SELECT username FROM user WHERE username='$user'");
                                $qj=mysqli_num_rows($qc);
                                // echo "jumlah data: $qj";
                                //username tidak ada
                                if (empty($qj)) {
                                        mysqli_query($koneksi,"INSERT INTO user (username, password, level, tipe, status, nama, alamat, kota, tlp) VALUES ('$user','$pass','$level','$tipe','$status',\"$nama\",'$alamat','$kota','$tlp')");
                                        if (mysqli_affected_rows($koneksi) > 0) {
                                            echo "<div class='alert alert-success alert-dismissible fade show'>
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Data</strong> Berhasil Disimpan
                                            </div>";
                                        }
                                        else {
                                            echo "<div class='alert alert-danger alert-dismissible fade show'>
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Data</strong> Gagal Disimpan
                                            </div>";
                                        }
                                }else { //username sudah ada
                                    echo "<div class='alert alert-danger alert-dismissible fade show'>
                                            <button type=button class=btn-close data-bs-dismiss=alert></button>
                                            <strong>Username $user</strong> Sudah Ada
                                    </div>";
                                }
                            } elseif ($t == "user_edit") {
                                $user=$_POST['username'];
                                $pass=$_POST['password'];
                                // $pass2= $_POST['password'];
                                $nama=$_POST['nama'];
                                $alamat=$_POST['alamat'];
                                $kota=$_POST['kota'];
                                $tlp=$_POST['tlp'];
                                $level=$_POST['level'];
                                $tipe=$_POST['tipe'];
                                $status=$_POST['status'];

                                //cek password yg ada di tabel user
                                $qcp= mysqli_query($koneksi,"SELECT password FROM user WHERE username='$user'");
                                $dcp=mysqli_fetch_row($qcp);
                                $pass_db=$dcp[0];

                                if ($pass == $pass_db) {
                                    //tidak ada perubahan password
                                    mysqli_query($koneksi,"UPDATE user SET nama= \"$nama\", alamat='$alamat', kota='$kota', tlp='$tlp', level='$level', tipe='$tipe', status='$status' WHERE username='$user'");
                                }
                                else {
                                    //ada perubahan password
                                    $pass2= password_hash($pass, PASSWORD_DEFAULT);
                                    mysqli_query($koneksi,"UPDATE user SET password='$pass2', nama= \"$nama\", alamat='$alamat', kota='$kota', tlp='$tlp', level='$level', tipe='$tipe', status='$status' WHERE username='$user'");
                                }
                                        if (mysqli_affected_rows($koneksi) > 0) {
                                            echo "<div class='alert alert-success alert-dismissible fade show'>
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Data</strong> Berhasil Diupdate
                                            </div>";
                                        }
                                        else {
                                            echo "<div class='alert alert-primary alert-dismissible fade show'>
                                                    <button type=button class=btn-close data-bs-dismiss=alert></button>
                                                    <strong>Data</strong> Tidak Ada Perubahan
                                            </div>";
                                        }
                            } elseif ($t == "user_hapus") {
                                $user=$_POST['user'];
                                mysqli_query($koneksi,"DELETE FROM user WHERE username='$user'");
                                if (mysqli_affected_rows($koneksi) > 0) {
                                    echo "<div class='alert alert-success alert-dismissible fade show'>
                                            <button type=button class=btn-close data-bs-dismiss=alert></button>
                                            <strong>Data</strong> Berhasil Dihapus
                                    </div>";
                                }
                                else {
                                    echo "<div class='alert alert-danger alert-dismissible fade show'>
                                            <button type=button class=btn-close data-bs-dismiss=alert></button>
                                            <strong>Data</strong> Gagal Dihapus
                                    </div>";
                                }
                            }
                        } elseif (isset($_GET['p'])) {
                            $p=$_GET['p'];
                            if ($p=="user_edit") {
                                $user=$_GET['user'];
                                $q=mysqli_query($koneksi,"SELECT password,nama,alamat,kota,tlp,level,tipe,status FROM user WHERE username='$user'");
                                $d=mysqli_fetch_row($q);
                                $pass=$d[0];
                                $pass2=password_hash($pass, PASSWORD_DEFAULT);
                                $nama=$d[1];
                                $alamat=$d[2];
                                $kota=$d[3];
                                $tlp=$d[4];
                                $level=$d[5];
                                $tipe=$d[6];
                                $status=$d[7];                           
                                }
                            }   
                        ?>
                        <div class="card mb-4" id="form_user">
                            <div class="card-header">
                                <i class="fa-solid fa-user-plus me-2 text-success fa-fade"></i>
                                 User
                            </div>
                            <div class="card-body">
                                <form method="post" class="need-validation" id="user_form">
                                <div class="mb-3">
                                    <label for="usernmae" class="form-label">Username :</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $user ?? ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Password :</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password" value="<?php echo $pass ?? ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama :</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" value="<?php echo $nama ?? ''; ?>" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat">Alamat :</label>
                                    <textarea class="form-control" rows="5" id="alamat" name="alamat"><?php echo $alamat ?? ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="kota" class="form-label">Kota :</label>
                                    <input type="text" class="form-control" id="kota" placeholder="Enter Kota" name="kota" value="<?php echo $kota ?? ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="tlp" class="form-label">Telepon :</label>
                                    <input type="text" class="form-control" id="tlp" placeholder="Enter Telepon" name="tlp" value="<?php echo $tlp ?? ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="level" class="form-label">Level :</label>
                                    <select class="form-select" name="level">
                                        <option value="">Level</option>
                                        <?php 
                                        $lv=array("admin","bendahara","petugas","warga");
                                        foreach($lv as $lv2){
                                            if($level==$lv2) $sel="SELECTED";
                                            else $sel= "";
                                            echo "<option value=$lv2 $sel>".ucwords($lv2)."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tipe" class="form-label">Tipe :</label>
                                    <select class="form-select" name="tipe">
                                        <option value="">Tipe</option>
                                        <?php 
                                        $tp=array("RT","Kos");
                                        foreach($tp as $tp2){
                                            if($tipe==$tp2) $sel="SELECTED";
                                            else $sel= "";
                                            echo "<option value=$tp2 $sel>".ucwords($tp2)."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status :</label>
                                    <select class="form-select" name="status">
                                        <option value="">Status</option>
                                        <?php 
                                        $st=array("AKTIF","TIDAK AKTIF");
                                        foreach($st as $st2){
                                            if($status==$st2) $sel="SELECTED";
                                            else $sel= "";
                                            echo "<option value='$st2' $sel>$st2</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="tombol" value="user_add">Simpan</button>
                                </form>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                 <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- //Apakah Anda yakin ingin menghapus data ini? -->
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <form method="post">
                                        <button type="submit" name="tombol" value="user_hapus" class="btn btn-danger" data-bs-dismiss="modal">Ya</button>
                                    </form>
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                                </div>

                            </div>
                        </div>
                        </div>   

                        <div class="card mb-4" id="data_user">
                            <div class="card-header">
                                <i class="fa-solid fa-users me-2 text-success fa-fade"></i>
                                Data User
=======
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Telepon</th>
                                            <th>Level</th>
                                            <th>Tipe</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php 
                                        $q=mysqli_query($koneksi,"SELECT username,nama,alamat,kota,tlp,level,tipe, status FROm user ORDER BY level ASC ");
                                        while($d=mysqli_fetch_row($q)) {
                                            $user=$d[0];
                                            $nama=$d[1];
                                            $alamat=$d[2];
                                            $kota=$d[3];
                                            $tlp=$d[4];
                                            $level=$d[5];
                                            $tipe=$d[6];
                                            $status=$d[7];

                                            echo " <tr>
                                                    <td>$user</td>
                                                    <td>$nama</td>
                                                    <td>$alamat</td>
                                                    <td>$kota</td>
                                                    <td>$tlp</td>
                                                    <td>$level</td>
                                                    <td>$tipe</td>
                                                    <td>$status</td>
                                                    <td>
                                                    <a href=index.php?p=user_edit&user=$user><button type=button class='btn btn-outline-success btn-sm'>Ubah</button></a>
                                                    <button type=button class='btn btn-outline-danger btn-sm' data-bs-toggle=modal data-bs-target=#myModal data_user=$user>Hapus</button> 
                                                    </td>
                                                </tr>";
                                        }
                                        ?>
                                        
                                        
=======
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
<<<<<<< HEAD
        </head>
=======
>>>>>>> 322a6312af4a7d4af5a772676bac0fe0edae7be3
    </body>
</html>
