<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">News Dashboard</span>
		<h3 class="page-title"><?= $title ?></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg">
		<!-- Form tambah jadwal dokter -->
		<form action="<?= site_url('jadwal/tambah_jadwal'); ?>" method="post" class="mb-4">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="nama_dokter" placeholder="Nama Dokter" required>
				<input type="text" class="form-control" name="spesialis" placeholder="Spesialis" required>
				<input type="text" class="form-control" name="hari" placeholder="Hari" required>
				<input type="text" class="form-control" name="jam" placeholder="Jam Praktik" required>
				<div class="input-group-append">
					<button class="btn btn-info border-0" type="submit">Tambah</button>
				</div>
			</div>
		</form>

		<!-- Daftar jadwal dokter -->
		<div class="card card-lg mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Jadwal Dokter</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<table class="table mb-0">
					<thead class="bg-light">
						<tr>
							<th>#</th>
							<th>Nama Dokter</th>
							<th>Spesialis</th>
							<th>Hari</th>
							<th>Jam</th>
							<th colspan="1">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $num = 1; foreach ($jadwal as $row): ?>
							<tr>
								<td><?= $num++ ?></td>
								<td><?= $row->nama_dokter ?></td>
								<td><?= $row->spesialis ?></td>
								<td><?= $row->hari ?></td>
								<td><?= $row->jam ?></td>
								<td>
									<a href="<?= site_url('jadwal/hapus_jadwal/' . $row->id); ?>" 
									   class="btn btn-danger btn-sm"
									   onclick="return confirm('Yakin ingin menghapus jadwal ini?')">
										<i class="material-icons">delete_outline</i> Hapus
									</a>
								</td>
							</tr>
						<?php endforeach ?>
						<?php if (empty($jadwal)): ?>
							<tr><td colspan="6">Belum ada jadwal</td></tr>
						<?php endif ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
