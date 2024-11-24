<?php 
include "header.php";
$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan");
$kegiatan = array();
while ($tiap_kegiatan = $ambil_kegiatan->fetch_assoc())
{
	$kegiatan[] = $tiap_kegiatan;
}
?>
<div class="container mt-5">
	<h3 data-aos="fade-right">Info Kata Pelanggan</h3>
	<hr>
	<?php foreach ($kegiatan as $key => $value): ?>
		<div class="row">
			<a href="detail_kegiatan.php?id=<?php echo $value["id_kegiatan"]; ?>" class="text-decoration-none text-dark">
				<div class="card mb-3 p-3 berita" data-aos="fade-down">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="assets/file/<?php echo $value["foto_kegiatan"]; ?>" class="img-fluid " style="width: 100%; height: 250px;">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo $value["nama_kegiatan"]; ?></h5>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
</div>
<?php 
include "footer.php";
?>