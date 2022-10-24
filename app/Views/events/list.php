<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pemesanan &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Jadwal</h1>
        <div class="section-header-button">
            <a href="<?= site_url('events/add') ?>" class="btn btn-primary">Add</a>
        </div>
    </div>

    <?php if (session()->getFlashData('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-boy">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashData('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-boy">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Jadwal</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Nama Acara</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>

                        </tr>
                        <?php foreach ($events as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->title ?></td>
                                <td><?= date('d/m/Y', strtotime($value->start_date)) ?></td>
                                <td><?= date('d/m/Y', strtotime($value->end_date)) ?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('events/edit/' . $value->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('events/' . $value->id) ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection() ?>