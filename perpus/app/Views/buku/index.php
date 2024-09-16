<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Buku</strong></h3>
        <div class="card-tools">
            <a href="/buku/create" class="btn btn-primary btn-sm">Tambah Buku</a>
        </div>
    </div>
    <!-- /.card-header -->

    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered">
            <!-- Table Header -->
            <thead>
                <tr>
                <th style="color: #fff; background-color: #6c757d">BukuID</th>
                    <th style="color: #fff; background-color: #6c757d">Judul</th>
                    <th style="color: #fff; background-color: #6c757d">Penulis</th>
                    <th style="color: #fff; background-color: #6c757d">Penerbit</th>
                    <th style="color: #fff; background-color: #6c757d">Tahun Terbit</th>
                    <th style="color: #fff; background-color: #6c757d">Aksi</th>
                </tr>
            </thead>
            <!-- /.table-header -->

            <!-- Table Body -->
            <tbody>
                <?php foreach ($bukus as $buku): ?>
                <tr style="background-color: #6c757d;">
                    <td><?= $buku['BukuID'] ?></td>
                    <td><?= $buku['Judul'] ?></td>
                    <td><?= $buku['Penulis'] ?></td>
                    <td><?= $buku['Penerbit'] ?></td>
                    <td><?= $buku['TahunTerbit'] ?></td>
                    <td>
                        <a href="/buku/update/<?= $buku['BukuID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/buku/delete/<?= $buku['BukuID'] ?>" method="post" style="display:inline-block;">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <!-- /.table-body -->
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>
