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
										$data_perhitungan_nilai = $this->MetodeModel->get_niai_setiap_alternatif($alt->id_alternatif, $val->id_kriteria);
										$data_pembagian_setiap_nilai = $this->MetodeModel->normalisasi_nilai($val->id_kriteria);
										$data_normalisasi = round($data_perhitungan_nilai['total_nilai'] / $data_pembagian_setiap_nilai['nilai_pembagian'], 3);
										echo $data_normalisasi; ?>
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
							<th>Nilai Maximum (C1+C2+C3+C4+C6+C8+C9)</th>
							<th>Nilai Minimum (C5+C7)</th>
							<th>Nilai Yi = (Max - Min)</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($alternatif as $alt) : ?>
							<tr>
								<td><?php echo $alt->nama_alternatif ?></td>
								<?php
								$max = 0;
								$min = 0;
								foreach ($kriteria as $val) :  ?>
									<?php
									$data_perhitungan_nilai = $this->MetodeModel->get_niai_setiap_alternatif($alt->id_alternatif, $val->id_kriteria);
									$data_pembagian_setiap_nilai = $this->MetodeModel->normalisasi_nilai($val->id_kriteria);
									$data_pembobotan_nilai = $this->MetodeModel->pembobotan_nilai($val->id_kriteria);

									if ($data_pembobotan_nilai['tipe'] === 'Benefit') {
										$max += round($data_perhitungan_nilai['total_nilai'] / $data_pembagian_setiap_nilai['nilai_pembagian'] * $data_pembobotan_nilai['bobot'], 4);
									} else {
										$min += round($data_perhitungan_nilai['total_nilai'] / $data_pembagian_setiap_nilai['nilai_pembagian'] * $data_pembobotan_nilai['bobot'], 4);
									}
									$nilai_yi = $max - $min;
									?>
								<?php endforeach ?>
								<?php $data_nilai_optimasi[] = $nilai_yi;
								$nilai_optimasi[] = $nilai_yi;
								$id_nilai_optimasi[] = $alt->id_alternatif;
								?>
								<td><?php echo $max; ?></td>
								<td><?php echo $min; ?></td>
								<td><?php echo $nilai_yi; ?></td>
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
						<?php
						$ranking = 1;
						for ($i = 0; $i < 5; $i++) {
							rsort($data_nilai_optimasi);

							$id_optimasi = array_search($data_nilai_optimasi[$i], $nilai_optimasi);
							$id_alternatif = $id_nilai_optimasi[$id_optimasi];
							$alternatif = $this->MetodeModel->hasil_nilai($id_alternatif);

							$nilai_optimasi_tertinggi = max($data_nilai_optimasi);
							$id_optimasi2 = array_search($nilai_optimasi_tertinggi, $nilai_optimasi);
							$id_alternatif2 = $id_nilai_optimasi[$id_optimasi2];
							$nama_alternatif_terpilih = $this->MetodeModel->hasil_nilai($id_alternatif2);
						?>
							<tr>
								<td><?php echo $alternatif['nama_alternatif']; ?></td>
								<td><?php echo $data_nilai_optimasi[$i]; ?></td>
								<td><?php echo $ranking; ?></td>
							</tr>
						<?php $ranking++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->