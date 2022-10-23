<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Portofolio &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('portofolio') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Portofolio</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Portofolio</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('portofolio') ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" required>
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