<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MTHREE</title>
	<link rel="icon" href="assets/file/computer.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<style type="text/css">
		.kartu:hover{
			background-color: #FF1493 ;
			color: white;
		}

		.kotak:hover{
			background-color: #FF1493 ;
		}

		p{
			font-size: 18px;
			color: dimgrey;
		}
		.pengajar {
			/* Add shadows to create the "card" effect */
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
		}

		/* On mouse-over, add a deeper shadow */
		.pengajar:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.pengurus {
			/* Add shadows to create the "card" effect */
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
		}

		/* On mouse-over, add a deeper shadow */
		.pengurus:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.berita:hover{
			background-color: #FF1493 ;
			color: white;
		}

		.galeri:hover{
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.samping:hover{
			background-color: #FF1493 ;
			color: white;
		}
		.sticky-top {
    transition: top 0.3s;
}
.hide-header {
    top: -100px; /* Sesuaikan dengan tinggi navbar Anda */
}

</style>
</head>
<body>
<div class="sticky-top top-nav" style="background: #FF1493;">
    <nav class="navbar navbar-dark navbar-expand-lg shadow">
        <div class="container">
            <!-- Logo -->
            <a href="index.php" class="navbar-brand">
                <img src="assets/file/mthree.png" alt="Logo" width="100">
            </a>

            <!-- Hamburger Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Pindahkan menu utama ke kanan dengan ms-auto -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1 kotak">
                        <a href="index.php" class="nav-link text-white fw-bold">Home</a>
                    </li>
                    <li class="nav-item mx-1 kotak">
                        <a href="semua_kegiatan.php" class="nav-link text-white fw-bold">Kata Pelanggan</a>
                    </li>
                    <li class="nav-item mx-1 kotak">
                        <a href="semua_galeri.php" class="nav-link text-white fw-bold">Image</a>
                    </li>
                    <li class="nav-item mx-1 kotak">
                        <a href="tentang_kami.php" class="nav-link text-white fw-bold">Tentang Kami</a>
                    </li>
                </ul>
                <!-- Menu Admin dengan jarak yang lebih dekat -->
                <ul class="navbar-nav">
                    <li class="nav-item mx-1 kotak">
                        <a href="login.php" class="nav-link text-white fw-bold">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

	<div class="min-vh-100">
</body>
<script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.sticky-top');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop) {
            // Scroll ke bawah, sembunyikan navbar
            navbar.classList.add('hide-header');
        } else {
            // Scroll ke atas, tampilkan navbar
            navbar.classList.remove('hide-header');
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Untuk mencegah scroll negatif
    });
</script>
		
