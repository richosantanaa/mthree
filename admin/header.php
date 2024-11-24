<?php 
include "../koneksi.php";
if (!isset($_SESSION["admin"])) 
{
	echo "<script>alert('anda harus login!')</script>";
	echo "<script>location = '../login.php'</script>";
}

$id = $_SESSION['admin'] ['id_admin'];
$aa = $koneksi -> query("SELECT * FROM admin WHERE id_admin = '$id'");
$admin = $aa->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator Mthree</title>
	<link rel="icon" type="text/css" href="../assets/file/computer.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
	<header class="navbar navbar-dark bg-dark sticky-top">
		<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand px-3" href="">Admin Mthree</a>
		<div class="navbar-nav">
			
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
		<nav id="sidebar" class="col-md-3 col-lg-2 bg-dark position-fixed start-0 top-0 bottom-0 py-5 collapse d-md-block sidebar">
				<a href="profil_admin.php" class="text-decoration-none">
					<div class="container text-center pt-4">
						<span class="bi bi-person-circle display-5 text-white"></span>
						<h6 class="pt-2 text-white"><?php echo $admin["nama_admin"]; ?></h6>
					</div>
				</a>
				<div class="pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white" href="index.php">
                <i class="fa fa-home"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="profil_admin.php">
                <i class="fa fa-user-circle"></i>
                Profil
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="kegiatan_tampil.php">
                <i class="fa fa-tasks"></i>
                Kegiatan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="galleri_tampil.php">
                <i class="fa fa-images"></i>
                Galleri
            </a>
        </li>

		<div class="nav-item">
    <a class="nav-link px-3" href="#" onclick="return confirmLogout()">
        <i class="bi bi-power"></i>
        Logout
    </a>
</div>
<script>
    function confirmLogout() {
        // Menampilkan dialog konfirmasi
        var result = confirm("Anda yakin ingin logout?");
        if (result) {
            // Jika pengguna memilih "OK", maka lanjutkan ke halaman logout
            window.location.href = 'logout.php';
        } else {
            // Jika pengguna memilih "Cancel", tidak melakukan apa-apa
            return false;
        }
    }
</script>
		      <!--  <li class="nav-item">
            <a class="nav-link text-white" href="berita_tampil.php">
                <i class="fa fa-newspaper"></i>
                Berita
            </a>
        </li> -->>
    </ul>
</div>
			</nav>
		</div>
	</div>
	<main class="col-lg-10 col-md-9 ms-sm-auto px-sm-8 py-8 vh-100 bg-light">
		<div class="card">
			<div class="card-body">

