<?php 
include "header.php";
//mendapatkan id kegiatan dari parameter id dari url menggunakan $_GET
$id_kegiatan = $_GET["id"];

//ambil data kegiatan berdasarkan id kegiatan yang sudah di dapatkan dalam $id_kegiatan
$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'");

//ubah data ke dalam bentuk array menggunakan fetch_assoc()
$kegiatan = $ambil_kegiatan -> fetch_assoc();
?>
<h4>Ubah kegiatan</h4>
<hr>
<div class="row">
	<div class="col-md-8">
		<!-- Pada bagian formulir bisa  di copy dari tambah data karna tampilannya sama,hanya saja kita menambhakan attribute value untuk menampilkan data yang ingin di ubah di dalam tiap formulir nya -->
		<form method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama kegiatan</label>
				<input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $kegiatan["nama_kegiatan"] ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Keterangan kegiatan</label>
				<textarea class="form-control" name="keterangan_kegiatan"><?php echo $kegiatan["keterangan_kegiatan"] ?></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Foto</label>
				<img src="../assets/file/<?php echo $kegiatan["foto_kegiatan"]; ?>" width="100" class="mb-1 rounded">
				<input type="file" class="form-control" name="foto_kegiatan">
			</div>
			<div class="mb-3">
				<button class="btn btn-primary" name="simpan">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php 
//jika user menekan tombol simpan maka php akan mendapatkan data yang di input di dalam formulir dan perintah2 berikut ini
if (isset($_POST["simpan"])) 
{
	//mendapatkan data berupa text yang di input pada formulir menggunakan perintah $_POST["name"],name disini merupakan nilai dari attribute name dari tiap2 inputan formulir
	$nama = $_POST["nama_kegiatan"];
	$keterangan = $_POST["keterangan_kegiatan"];

	//untuk mendapatkan data inputan berupa file gunakan perintah $_FILES["name"] untuk mendapatkan nama file dan $_FILES["tmp_name"] untuk mendapatkan lokasi nya
	$foto = $_FILES["foto_kegiatan"] ["name"];
	$file = $_FILES["foto_kegiatan"] ["tmp_name"];

	//disini kita akan mengubah data berdasakan 2 kondisi yaitu : 
	//mengubah data tanpa merubah foto seperti perintah if dibawah ini
	if (empty($file)) 
	{
		//buat query untuk mengubah data tanpa merubah foto_kegiatan berdasarkan id kegiatan
		$koneksi -> query("UPDATE kegiatan SET 
			nama_kegiatan = '$nama',
			keterangan_kegiatan = '$keterangan' WHERE id_kegiatan = '$id_kegiatan'");
	}

	//mengubah data sekaligus merubah foto seperti dibawah ini
	else
	{
		$koneksi -> query("UPDATE kegiatan SET 
			nama_kegiatan = '$nama',
			keterangan_kegiatan = '$keterangan',
			foto_kegiatan = '$upload' WHERE id_kegiatan = '$id_kegiatan'");

		//upload foto yang di input di formulir ke dalam folder file yang terdapat di folder assets pada folder aplikasi
		move_uploaded_file($file, "../assets/file/$upload");
	}


	//bila tambah data berhasil munculkan alert seperti berikut
	echo "<script>alert('Data berhasil diubah')</script>";
	//lalu redirect/kembali ke halaman kegiatan_tampil.php menggunakan location
	echo "<script>location = 'kegiatan_tampil.php'</script>";
}
include "footer.php";
?>