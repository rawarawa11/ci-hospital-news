<?php $this->load->view('layout/header'); ?>

<div class="container mb-5">
    <h2 class="text-success fw-bold text-center mb-4">Jadwal Dokter</h2>
    <p class="text-center text-muted mb-4">Berikut adalah jadwal praktik dokter di RS Bhayangkara Aceh.</p>

    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm">
            <thead class="text-center table-success">
                <tr>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($jadwal)): ?>
                    <?php foreach ($jadwal as $row): ?>
                        <tr>
                            <td><?= $row->nama_dokter; ?></td>
                            <td><?= $row->spesialis; ?></td>
                            <td><?= $row->hari; ?></td>
                            <td><?= $row->jam; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4" class="text-center">Belum ada jadwal tersedia.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
