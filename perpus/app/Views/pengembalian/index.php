<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar Pengembalian</strong></h3>
        <div class="card-tools">
            <a href="/pengembalian/create" class="btn btn-primary btn-sm">Tambah Pengembalian</a>
        </div>
    </div>
    <!-- /.card-header -->

    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered">
            <!-- Table Header -->
            <thead>
                <tr>
                <th style="color: #fff; background-color: #6c757d">ID</th>
                    <th style="color: #fff; background-color: #6c757d">Username</th>
                    <th style="color: #fff; background-color: #6c757d">Judul Buku</th>
                    <th style="color: #fff; background-color: #6c757d">Tanggal kembali</th>
                    <th style="color: #fff; background-color: #6c757d">Aksi</th>
                </tr>
            </thead>
            <!-- /.table-header -->

            <!-- Table Body -->
            <tbody>
                <?php foreach ($pengembalians as $pengembalian): ?>
                <tr style="background-color: #6c757d;">
                    <td><?= $pengembalian['PeminjamanID'] ?></td>
                    <td><?= $pengembalian['UserID'] ?></td>
                    <td><?= $pengembalian['BukuID'] ?></td>
                    <td><?= $pengembalian['TanggalPengembalian'] ?></td>
                    <td>
                        <a href="/pengembalian/update/<?= $pengembalian['PeminjamanID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/pengembalian/delete/<?= $pengembalian['PeminjamanID'] ?>" method="post" style="display:inline-block;">
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
