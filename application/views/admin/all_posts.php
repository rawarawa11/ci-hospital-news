<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">News Dashboard</span>
    <h3 class="page-title"><?= $title ?></h3>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card card-small shadow-sm border-left-info mb-4">
      <div class="card-header bg-primary text-white">
        <h6 class="m-0"><i class="material-icons align-middle">article</i> Daftar Berita</h6>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-bordered mb-0 text-center">
          <thead class="thead-light">
            <tr>
              <th>No.</th>
              <th>Judul Berita</th>
              <th>Kategori</th>
              <th>Dibuat Pada</th>
              <th colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $num = 1 ?>
            <?php foreach ($query as $news): ?>
              <tr>
                <td><?= $num++ ?></td>
                <td class="text-left"><?= $news->post_title ?></td>
                <td><?= $news->cat_title ?></td>
                <td><?= $news->created_at ?></td>
                <td>
                  <a href="<?= base_url('news/create/' . $news->id) ?>" class="btn btn-sm btn-warning">
                    <i class="material-icons">edit</i> Edit
                  </a>
                </td>
                <td>
                  <form action="<?= base_url('news/delete') ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                    <input type="hidden" name="id" value="<?= $news->id ?>">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class="material-icons">delete</i> Hapus
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
            <?php if (empty($query)): ?>
              <tr>
                <td colspan="6">Tidak ada berita ditemukan.</td>
              </tr>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
