<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Pemesanan &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('pemesanan') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Pemesanan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Pemesanan</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('pemesanan') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>ID Pemesan</label>
                        <select name="id_user" class="form-control">
                                    <option value="">Pilih Pemesan </option>
                                    <?php foreach ($users as $us) : ?>
                                        <option value="<?php echo $us->id_user ?>"><?php echo $us->id_user ?>-<?php echo $us->username ?></option>
                                    <?php endforeach; ?>
                                </select>        </div>
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" name="nama_pemesan" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Acara</label>
                        <input type="text" name="jenis_acara" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Acara</label>
                        <textarea name="deskripsi_acara" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <select name="status" id="status">
                            <option value="">--Pilih Status--</option>
                            <option value="Pending">Pending</option>
                            <option value="Acc">Acc</option>
                            <option value="Decline">Decline</option>
                        </select>
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