<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Pemesanan &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('pemesanan') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Pemesanan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Pemesanan</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('pemesanan/' . $pemesanan->id_pemesanan) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" name="nama_pemesan" value="<?= $pemesanan->nama_pemesan ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" value="<?= $pemesanan->telepon ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Acara</label>
                        <input type="text" name="jenis_acara" value="<?= $pemesanan->jenis_acara ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" value="<?= $pemesanan->tanggal_acara ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" value="<?= $pemesanan->tanggal_acara ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Acara</label>
                        <textarea name="deskripsi_acara" class="form-control" cols="30" rows="10"><?= $pemesanan->deskripsi_acara ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" value="<?= $pemesanan->status ?>" class="form-control">
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