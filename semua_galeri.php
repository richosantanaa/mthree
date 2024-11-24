<?php 
include "header.php";
$ambil_galeri = $koneksi -> query("SELECT * FROM galeri");
$galeri = array();
while ($tiap_galeri = $ambil_galeri->fetch_assoc()) 
{
	$galeri[] = $tiap_galeri;
}
?>
<div class="container">
	<h3 class="text-center my-5" data-aos="fade-right">Image Mthree</h3>
	<div class="row">
		<?php foreach ($galeri as $key => $value): ?>
			<div class="col-md-4 col-6">
			<div class="galeri text-center pt-3" data-aos="fade-down">
					<img src="assets/file/<?php echo $value["foto_galeri"]; ?>" class="img-fluid mb-3" style="height: 350px;">
				</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<?php 
include "footer.php";
?>