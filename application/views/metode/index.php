<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Nilai Alternatif</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table1" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Alternatif</th>
							<?php foreach ($kriteria as $val) : ?>
								<th>C<?php echo $val->id_kriteria ?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($alternatif as $alt) : ?>
							<tr>
								<td><?php echo $alt->nama_alternatif ?></td>
								<?php foreach ($kriteria as $val) :  ?>
									<td>
										<?php $data_perhitungan_nilai = $this->MetodeModel->get_niai_setiap_alternatif($alt->id_alternatif, $val->id_kriteria);
										echo $data_perhitungan_nilai['total_nilai']; ?>
									</td>
								<?php endforeach ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Melakukan Normalisasi Matriks</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table2" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Alternatif</th>
							<?php foreach ($kriteria as $val) : ?>
								<th>C<?php echo $val->id_kriteria ?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($alternatif as $alt) : ?>
							<tr>
								<td><?php echo $alt->nama_alternatif ?></td>
								<?php foreach ($kriteria as $val) :  ?>
									<td>
										<?php 

										?>
									</td>
								<?php endforeach ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Melakukan Nilai Otimasi Setiap Alternatif </h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table3" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Alternatif</th>
							<th>Nilai Maximum</th>
							<th>Nilai Minimum</th>
							<th>Nilai Yi = (Max - Min)</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Ranking Setiap Alternatif</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table4" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Alternatif</th>
							<th>Nilai Optimasi</th>
							<th>Ranking</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Hasil Akhir dan Kesimpulan</h6>
		</div>
		<div class="card-body">
			<!-- Hasil dari perhitungan MOORA bisa disimpulkan dengan hasil alternatif terbaik yaitu <b><?php echo $nama_alternatif_terpilih['nama_alternatif']; ?></b>, dengan jumlah nilai optimasi <b><?php echo $nilai_optimasi_tertinggi ?></b> . -->
		</div>
	</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->