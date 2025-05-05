<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-3 mb-sm-0">
        <span class="text-uppercase page-subtitle">Manajemen</span>
        <h3 class="page-title"><?= $title ?></h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Form Tambah -->
        <div class="card card-small mb-4 border-left-primary">
            <div class="card-header bg-primary text-white">
                <i class="material-icons align-middle">add_circle</i> Tambah Jadwal Dokter
            </div>
            <div class="card-body">
                <form action="<?= site_url('jadwal/tambah_jadwal'); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Nama Dokter</label>
                            <input type="text" class="form-control" name="nama_dokter" placeholder="dr. John Doe" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Spesialis</label>
                            <input type="text" class="form-control" name="spesialis" placeholder="Spesialis Anak" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Hari</label>
                            <input type="text" class="form-control" name="hari" placeholder="Senin" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Jam</label>
                            <input type="text" class="form-control" name="jam" placeholder="08.00 - 10.00" required>
                        </div>
                        <div class="form-group col-md-2 d-flex align-items-end">
                            <button class="btn btn-success btn-block" type="submit">
                                <i class="material-icons">save</i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel Jadwal -->
        <div class="card card-small shadow-sm border-left-info">
            <div class="card-header bg-primary text-white">
                <h6 class="m-0"><i class="material-icons align-middle">event_note</i> Daftar Jadwal Dokter</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered mb-0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th>No.</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1; foreach ($jadwal as $j): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $j->nama_dokter ?></td>
                            <td><?= $j->spesialis ?></td>
                            <td><?= $j->hari ?></td>
                            <td><?= $j->jam ?></td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn"
                                        data-id="<?= $j->id ?>"
                                        data-nama="<?= $j->nama_dokter ?>"
                                        data-spesialis="<?= $j->spesialis ?>"
                                        data-hari="<?= $j->hari ?>"
                                        data-jam="<?= $j->jam ?>">
                                    <i class="material-icons">edit</i> Edit
                                </button>
                            </td>
                            <td>
                                <a href="<?= site_url('jadwal/hapus_jadwal/' . $j->id) ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="material-icons">delete</i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        <?php if (empty($jadwal)): ?>
                        <tr>
                            <td colspan="7">Data tidak ditemukan.</td>
                        </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEditJadwal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= site_url('jadwal/update_jadwal'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Edit Jadwal Dokter</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" id="edit_nama" required>
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" id="edit_spesialis" required>
                    </div>
                    <div class="form-group">
                        <label>Hari</label>
                        <input type="text" class="form-control" name="hari" id="edit_hari" required>
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="text" class="form-control" name="jam" id="edit_jam" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update Jadwal</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Script Modal -->
<script>
    $(document).ready(function () {
        $('.editBtn').on('click', function () {
            $('#edit_id').val($(this).data('id'));
            $('#edit_nama').val($(this).data('nama'));
            $('#edit_spesialis').val($(this).data('spesialis'));
            $('#edit_hari').val($(this).data('hari'));
            $('#edit_jam').val($(this).data('jam'));
            $('#modalEditJadwal').modal('show');
        });
    });
</script>
