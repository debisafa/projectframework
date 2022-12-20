
<div class="card">
	<div class="card-body">

		<h4 class="card-title">Jadwal | <b style="text-transform: uppercase;"><code> <?=$data['nama_mahasiswa'] ?> </code></b></h4>
		<hr>
		<div class="row">
			<?php 
			// tampilkan data absen setiap bulan, berdasarkan tahun ajaran yg aktif
			$qry = mysqli_query($con,"SELECT * FROM tb_mahasiswa
				INNER JOIN tb_matkul ON tb_mahasiswa.id_mahasiswa=tb_matkul.id_mahasiswa
				INNER JOIN tb_ajar ON tb_matkul.id_matkul=tb_ajar.id_matkul
				INNER JOIN tb_dosen ON tb_ajar.id_dosen=tb_dosen.id_dosen
				WHERE tb_mahasiswa.id_mahasiswa='$data[id_mahasiswa]'
			 ");


			 foreach ($qry as $hari) { ?>
			 	<?php 
			 	$hari = date('m',strtotime($hari['hari']));

			 	?>


			 	<div class="col-xl-12">
                     <div class="alert alert-info alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
					<strong>
						<h3><?= $jd['ajar']; ?></h3>
					</strong>
					<hr>
					<ul>
						<li>
							Hari : <?= $jd['hari']; ?>
						</li>
						<li>
							Jam Ke : <?= $jd['jamke']; ?>
						</li>
						<li>
							Waktu : <?= $jd['jam_mengajar']; ?>
						</li>
						<li>
							Kelas : <?= $jd['nama_kelas']; ?>
						</li>
					</ul>
					<hr>
					<a href="?page=absen&pelajaran=<?= $jd['id_ajar'] ?> " class="btn btn-default btn-block text-left">
						<i class="fas fa-clipboard-check"></i>
						Presensi
					</a>
				</div>
			</div>
			 <?php } ?>
		</div>
	</div>
</div>

	<a href="javascript:history.back()" class="btn btn-default btn-block"><i class="fas fa-arrow-circle-left"></i> Kembali</a>