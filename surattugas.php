<?php include('config.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<center><font size="6">Tambah Data Surat Tugas</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Nim			= $_POST['Nim'];
			$Tujuan			= $_POST['Tujuan'];
			$Nama_Mhs		= $_POST['Nama_Mhs'];
			$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
			$Program_Studi	= $_POST['Program_Studi'];

			$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(Nim, Tujuan, Nama_Mhs, Jenis_Kelamin, Program_Studi) VALUES('$Nim', '$Tujuan', '$Nama_Mhs', '$Jenis_Kelamin', '$Program_Studi')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="tampil.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, No Surat sudah terdaftar.</div>';
			}
		}
		?>

		<form action="suratketerangan.php?page=tambah_mhs" method="post" class="container-fluid">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Surat</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nim" class="form-control" size="4" required>
				</div>
			</div>
			<label class="col-form-label col-md-3 col-sm-3 label-align">Tujuan</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Tujuan" class="form-control" size="4" required>
				</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mitra</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Mhs" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Mitra</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Jenis_Kelamin" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Program_Studi" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
                <br>
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
			</div>
		</form>
	</div>
