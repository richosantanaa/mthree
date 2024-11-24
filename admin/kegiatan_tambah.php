<?php 
include "header.php";
?>
<h4>Tambah kegiatan</h4>
<hr>
<div class="row">
	<div class="col-md-8">
		<!-- membuat formulir untuk menambahkan data,metode pengiriman data menggunakan post, enctype multipart-form data digunakan karna terdapat inputan file dalam formulir (Foto) -->
		<form method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama kegiatan</label>
				<input type="text" class="form-control" name="nama_kegiatan">
			</div>
			<div class="mb-3">
				<label class="form-label">Keterangan kegiatan</label>
				<textarea class="form-control" name="keterangan_kegiatan"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Foto</label>
				<input type="file" class="form-control" name="foto_kegiatan">
			</div>
			<div class="mb-3">
				<button class="btn btn-primary" name="simpan">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php 
//Jika user menekan tombol simpan maka php akan melakukan proses mendapatkan data yang di input pada formulir perintahnya (if(isset($_POST["simpan"])))
if (isset($_POST["simpan"])) 
{
	//mendapatkan data berupa text yang di input pada formulir menggunakan perintah $_POST["name"],name disini merupakan nilai dari attribute name dari tiap2 inputan formulir
	$nama = $_POST["nama_kegiatan"];
	$keterangan = $_POST["keterangan_kegiatan"];
	
	//untuk mendapatkan data inputan berupa file gunakan perintah $_FILES["name"] untuk mendapatkan nama file dan $_FILES["tmp_name"] untuk mendapatkan lokasi nya
	$foto = $_FILES["foto_kegiatan"] ["name"];
	$file = $_FILES["foto_kegiatan"] ["tmp_name"];

	//lakukan query tambah data seperti dibawah ini untuk memasukkan data yang di ketiik di formulir kedalam database table kegiatan
	$koneksi -> query("INSERT INTO kegiatan(nama_kegiatan,keterangan_kegiatan,foto_kegiatan) VALUES('$nama','$keterangan','$foto')");

	//upload foto yang di input di formulir ke dalam folder file yang terdapat di folder assets pada folder aplikasi
	move_uploaded_file($file, "../assets/file/$foto");

	//bila tambah data berhasil munculkan alert seperti berikut
	echo "<script>alert('Berhasil menambahkan data')</script>";
	//lalu redirect/kembali ke halaman kegiatan_tampil.php menggunakan location
	echo "<script>location = 'kegiatan_tampil.php'</script>";
}
include "footer.php";
?>