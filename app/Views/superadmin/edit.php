<?= $this->extend('layout/defaultSuperAdmin') ?>

<?= $this->section('title') ?>
<title>Edit User &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('homesuperadmin') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit User</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data User</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('homesuperadmin/' . $users->id_user) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_user" class="form-control" value="<?= $users->nama_user ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $users->username ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <!-- <label>Password</label> -->
                        <input type="hidden" name="password_user" class="form-control" value="<?= $users->password_user ?>" required>
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $users->no_telp ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Role ID</label>
                        <select name="role_id" id="role_id">
                            <option value="<?= $users->role_id ?>"><?php echo $users->role_id ?></option>
                            <option value="1">1-Pelanggan</option>
                            <option value="2">2-Admin</option>
                            <option value="3">3-Superadmin</option>

                        </select>
                        <!-- <input type="text" name="role_id" class="form-control" value="<?= $users->role_id ?>" required> -->
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection() ?>