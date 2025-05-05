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
        <!-- Form Tambah Kategori -->
        <div class="card card-small mb-4 border-left-success">
            <div class="card-header bg-primary text-white">
                <i class="material-icons align-middle">add_circle</i> Tambah Kategori Berita
            </div>
            <div class="card-body">
                <form action="<?= base_url('categories/create') ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" name="cat_title" placeholder="Nama Kategori" required>
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

        <!-- Tabel Kategori -->
        <div class="card card-small shadow-sm border-left-info">
            <div class="card-header bg-primary text-white">
                <h6 class="m-0"><i class="material-icons align-middle">category</i> Daftar Kategori Berita</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered mb-0 text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($query as $category): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-left"><?= $category->cat_title ?></td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn"
                                        data-id="<?= $category->id ?>"
                                        data-title="<?= $category->cat_title ?>">
                                    <i class="material-icons">edit</i> Edit
                                </button>
                            </td>
                            <td>
                                <form action="<?= base_url('categories/delete') ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                    <input type="hidden" name="id" value="<?= $category->id ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="material-icons">delete</i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if (empty($query)): ?>
                        <tr>
                            <td colspan="4">Tidak ada kategori ditemukan.</td>
                        </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEditKategori" tabindex="-1" role="dialog" aria-labelledby="modalKategoriLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('categories/update') ?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Edit Kategori Berita</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="cat_name" id="edit_nama" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update Kategori</button>
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
            $('#edit_nama').val($(this).data('title'));
            $('#modalEditKategori').modal('show');
        });
    });
</script>
