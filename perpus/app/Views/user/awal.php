<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Daftar User</strong></h3>
        <div class="card-tools">
            <a href="/user/awal" class="btn btn-primary btn-sm">Tambah User</a>
        </div>
    </div>
    <!-- /.card-header -->

    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered">
            <!-- Table Header -->
            <thead>
            <tr>
                <th style="color: #fff; background-color: #007bff; text-align: center;">UserID</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Username</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Password</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Email</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Nama Lengkap</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Alamat</th>
                <th style="color: #fff; background-color: #007bff; text-align: center;">Aksi</th>

            </tr>
            </thead>
            <!-- /.table-header -->

            <!-- Table Body -->
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr style="background-color: #6c757d;">
                    <td><?= $user['UserID'] ?></td>
                    <td><?= $user['Username'] ?></td>
                    <td><?= $user['Password'] ?></td>
                    <td><?= $user['Email'] ?></td>
                    <td><?= $user['NamaLengkap'] ?></td>
                    <td><?= $user['Alamat'] ?></td>
                    <td>
                    <a href="/user/update/<?= $user['UserID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/user/delete/<?= $user['UserID'] ?>" method="post" style="display:inline-block;">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
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
