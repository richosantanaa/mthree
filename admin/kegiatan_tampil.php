<?php 
//memanggil file header ke dalam file kegiatan_tampil
include "header.php";

//mengambil data dari table kegiatan dari database (Hasilnya dalam bentuk objek)
$ambil_kegiatan = $koneksi -> query("SELECT * FROM kegiatan");

//membuat sebuah wadah array kosong untuk diisi dengan data dari database
$kegiatan = array();

//mengubah data dari bentuk objek ke dalam bentuk array menggunakan fungsi fetch_assoc() dan diperulangkan menggunakan while agar bisa mendapatkan semua data dari table kegiatan dari database
while ($tiap_kegiatan = $ambil_kegiatan -> fetch_assoc()) 
{
	//memasukkan data yang sudah didapat ke dalam $kegiatan
	$kegiatan[] = $tiap_kegiatan;
}
?>
<h4>Data Kata Pelanggan</h4>
<hr>
<table class="table table-bordered table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama kegiatan</th>
			<th>Keterangan kegiatan</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<!-- 
		Melakukan perulangan foreach pada tag html tr dan td agar data yang diperulangkan sesuai dengan jumlah data yang didapat dari database
		 -->
		<?php foreach ($kegiatan as $key => $value): ?>
			<tr>
				<!-- Memanggil nomor menggunakan $key+1 -->
				<td><?php echo $key+1; ?></td>
				<!-- Memanggil nilai dari setiap data menggunakan $value["kolom dari table di database"] -->
				<td><?php echo $value["nama_kegiatan"]; ?></td>
				<td><?php echo $value["keterangan_kegiatan"]; ?></td>
				<td>
					<img src="../assets/file/<?php echo $value["foto_kegiatan"]; ?>" width="100">
				</td>
				<td nowrap="nowrap">
					<a href="kegiatan_ubah.php?id=<?php echo $value["id_kegiatan"]; ?>" title="Ubah" class="btn-sm btn btn-warning">
						<span class="bi bi-pencil-square text-white"></span>
					</a>
					<a href="kegiatan_hapus.php?id=<?php echo $value["id_kegiatan"]; ?>" onclick="return confirm('Apakah anda yakin?')" title="Hapus" class="btn-sm btn btn-danger">
						<span class="bi bi-trash"></span>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="kegiatan_tambah.php" title="Tambah" class="btn btn-primary">
	Tambah
	<span class="bi bi-plus"></span>
</a>
<?php 
include "footer.php";
?>