<?php 
include "header.php";
$ambil_berita = $koneksi -> query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3");
$berita = array();
while ($tiap_berita = $ambil_berita->fetch_assoc())
{
	$berita[] = $tiap_berita;
}

$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan ORDER BY id_kegiatan DESC LIMIT 3");
$kegiatan = array();
while ($tiap_kegiatan = $ambil_kegiatan -> fetch_assoc()) 
{
	$kegiatan[] = $tiap_kegiatan;
}

$ambil_galeri = $koneksi -> query("SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 6");
$galeri = array();
while ($tiap_galeri = $ambil_galeri -> fetch_assoc()) 
{
	$galeri[] = $tiap_galeri;
}
?>

<!-- Carousel Header -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Gambar pertama -->
    <div class="carousel-item active">
      <img src="assets/file/mthree.png" class="d-block w-75 mx-auto" alt="First Image">
    </div>
    <!-- Gambar kedua -->
    <div class="carousel-item">
      <img src="assets/file/mthree2.jpeg" class="d-block w-75 mx-auto" alt="Second Image">
    </div>
    <!-- Gambar ketiga -->
    <div class="carousel-item">
      <img src="assets/file/mthree3.webp" class="d-block w-75 mx-auto" alt="Third Image">
    </div>
  </div>

  <!-- Tombol navigasi previous -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <!-- Tombol navigasi next -->
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Tambahkan CSS untuk ubah warna panah -->
<style>
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: black; /* Ubah warna background panah */
  }

  .carousel-control-prev,
  .carousel-control-next {
    filter: invert(1); /* Pastikan ikon tetap terlihat putih jika latar belakang hitam */
  }
</style>

<!-- Section Review Ulasan -->
<?php /*
<section class="container my-5">
	<div class="text-center">
		<h3 class="mb-5 fw-bold" data-aos="fade-right">Review Ulasan</h3>
	</div>
	<div class="row">
		<?php foreach ($berita as $key => $value): ?>
			<div class="col-md-4 mb-3" data-aos="fade-down">
				<a href="detail_berita.php?id=<?php echo $value["id_berita"]; ?>" class="text-decoration-none text-dark">
					<div class="card py-2 px-2 kartu" style="height: 200px;">
						<img src="assets/file/<?php echo $value["foto_berita"]; ?>" style="width: 100%; height: 100px;" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">
								<?php echo $value["nama_berita"]; ?>
							</h5>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	</div>
	<div class="text-center mt-3">
		<a href="semua_berita.php" class="btn fw-bold text-white" style="background-color: #FF1493 ;">SEMUA BERITA</a>
	</div>
</section>
*/ ?>

<section class="mb-5 p-5">
	<div class="container">
		<h3 class="mb-5 text-center fw-bold" data-aos="fade-right">Kata Pelanggan</h3>
		<div class="row">
			<?php foreach ($kegiatan as $kk => $vk): ?>
				<div class="col-md-4 text-center" data-aos="fade-down" style="text-align :justify;">
					<a href="detail_kegiatan.php?id=<?php echo $vk["id_kegiatan"]; ?>" class="text-decoration-none text-dark">	
						<div class="card kartu py-2 px-2">
							<img src="assets/file/<?php echo $vk["foto_kegiatan"]; ?>" class="img-fluid mb-2 card-img-top" style=" height:350px;" >
							<div class="card-body">
								<h4 class="card-title"><?php echo $vk["nama_kegiatan"]; ?></h4>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<div class="text-center mt-3">
				<a href="semua_kegiatan.php" class="btn fw-bold text-white" style="background-color: #FF1493 ;">SEMUA ULASAN</a>
			</div>
		</div>
	</div>
</section>

<section class="mb-5 p-5 bg-light shadow">
	<div class="container">
		<h3 class="mb-5 text-center fw-bold" data-aos="fade-right">Image Mthree Bogor</h3>
		<div class="row">
			<?php foreach ($galeri as $kg => $vg): ?>
				<div class="col-md-4 col-6 galeri text-center pt-3" data-aos="fade-down">
					<img src="assets/file/<?php echo $vg["foto_galeri"]; ?>" class="img-fluid mb-3" style="height: 350px;">
				</div>
			<?php endforeach ?>
			<div class="text-center mt-3">
				<a href="semua_galeri.php" class=" btn fw-bold text-white" style="background-color: #FF1493 ;">Show Image</a>
			</div>
		</div>
	</div>
</section>

<section style="text-align: center;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6897801006526!2d106.7292836731574!3d-6.5607869934323775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e9b7a87b43%3A0xd9c1f3b1b890fbf1!2sM.%20Three%20Computer!5e0!3m2!1sid!2sid!4v1732448690778!5m2!1sid!2sid" width="800" height="450" style="border:5px solid; display: inline-block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php 
include "footer.php";
?>
