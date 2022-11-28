<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data Jadwal &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('events') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Jadwal</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Jadwal</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('events/' . $events->id) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Acara</label>
                        <input type="text" name="title" value="<?= $events->title ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="start_date" value="<?= $events->start_date ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="end_date" value="<?= $events->end_date ?>" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-primary\">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection() ?>