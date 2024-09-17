<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah Peminjaman</strong></h3>
    </div>
    <!-- /.card-header -->

    <!-- Card Body -->
    <div class="card-body">
        <form action="/peminjaman/edit/<?= isset($peminjaman[0]['PeminjamanID']) ? $peminjaman[0]['PeminjamanID'] : 'Data tidak ditemukan' ?>" method="post">
            <div class="form-group">
                <label for="userID" style="color: #007bff;">UserID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" value="<?= isset ($peminjaman[0]['UserID']) ?>">
            </div>
            <div class="form-group">
                <label for="BukuID" style="color: #007bff;">BukuID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" value="<?= isset ($peminjaman[0]['BukuID']) ?>">
            </div>
            
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function (){
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaulDate:new Date()
        });
    });
</script>
<?= $this->endSection() ?>
