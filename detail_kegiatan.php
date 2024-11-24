<?php 
include "header.php";
$id = $_GET["id"];
$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan WHERE id_kegiatan = '$id'");
$kegiatan = $ambil_kegiatan->fetch_assoc();

$ambil_berita1 = $koneksi -> query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
$berita1 = array();
while ($tiap_berita1 = $ambil_berita1->fetch_assoc())
{
	$berita1[] = $tiap_berita1;
}
// echo "<pre>";
// print_r($berita);
// echo "</pre>";
?>

<div class="container">
	<h3 class="mt-5" data-aos="fade-right"><?php echo $kegiatan["nama_kegiatan"]; ?></h3>
	<div class="row">
		<div class="col-md-8" data-aos="fade-up">
			<img src="assets/file/<?php echo $kegiatan["foto_kegiatan"]; ?>" style="width: 100%; ">
			<p class="mt-5" style="text-align: justify;">
				<?php echo $kegiatan["keterangan_kegiatan"]; ?>	
			</p>
		</div>
		<!--  <div class="col-md-4" data-aos="fade-left">
			<div class="card px-20">
				<h5 class="text-center mt-3 fw-bold">Video Pengerjaan</h5>-->
				<hr>	
				<div class="row mb-3">
					<?php foreach ($berita1 as $key => $value): ?>
						<a href="detail_berita.php?id=<?php echo $value["id_berita"] ?>" class="text-decoration-none text-dark">
							<div class="samping d-flex p-3">
								<div class="col-3 text-center">
									<img src="assets/file/<?php echo $value["foto_berita"]; ?>" width="75">
								</div>
								<div class="col-9">
									<h6><?php echo $value["nama_berita"]; ?></h6>
									<span class="small ms-1"><?php echo date("d M Y",strtotime($value["tanggal_update"])); ?></span>
									<hr>
								</div>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div> 
</div>

<?php 
include "footer.php";
?>