<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah User</strong></h3>
    </div>
    <!-- /.card-header -->

    <!-- Card Body -->
    <div class="card-body">
        <form action="/user/store" method="post">
            <div class="form-group">
                <label for="username" style="color: #007bff;">Username</label>
                <input type="text" name="Username" id="Username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password" style="color: #007bff;">Password</label>
                <input type="text" name="Password" id="Password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email" style="color: #007bff;">Email</label>
                <input type="text" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_lengkap" style="color: #007bff;">Nama Lengkap</label>
                <input type="text" name="NamaLengkap" id="NamaLengkap" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat" style="color: #007bff;">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>
