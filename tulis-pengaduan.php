
<div class="card shadow">
	<div class="card-header">
		<a href="masyarakat.php" class="btn btn-secondary btn-icon-split">
			<span class="icon text-white-5">
				<i class="fa fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>
		</div>
		<div class="card-body">
			<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
				<div class="form-group">
					<label style="font-size: 14px;">Tanggal Pengaduan</label>
					<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">NIK</label>
					<input type="text" name="nik" class="form-control" readonly value="<?php echo $_SESSION['nik'] ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Isi Laporan</label>
					<textarea name="isi_laporan" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Foto</label>
					<input type="file" required class="form-control" name="foto" accept=".jpg, .jpeg, .png, .gif"><font color="red" size="3">* tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success"> SIMPAN </button>
					<button type="reset" class="btn btn-success"> HAPUS </button>

				</div>
			</form>
		</div>
	</div>