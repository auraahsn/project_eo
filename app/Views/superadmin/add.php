<?= $this->extend('layout/defaultSuperAdmin') ?>

<?= $this->section('title') ?>
<title>Tambah User &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('homesuperadmin') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah User</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data User</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('homesuperadmin') ?>" method="post" autocomplete="off" class="needs-validation" novalidate="">
                    <?= $validate->listErrors() ?>
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_user" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password_user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Role ID</label><br>
                        <select name="role_id" id="role_id">
                            <option value="">--Pilih Role--</option>
                            <option value="1">1-Pelanggan</option>
                            <option value="2">2-Admin</option>
                            <option value="3">3-Superadmin</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection() ?>