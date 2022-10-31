<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pemesanan &mdash; EO YAMA</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Pemesanan</h1>
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
                <h4>Data Pemesanan</h4>
            </div>
            <div class="ml-4">
                    <a href="<?= site_url('pemesanan/add') ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</button></a>
                </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pemesan</th>
                            <th>No Telepon</th>
                            <th>Jenis Acara</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Deskripsi Acara</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pemesanan as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->nama_pemesan ?></td>
                                <td><?= $value->telepon ?></td>
                                <td><?= $value->jenis_acara ?></td>
                                <td><?= date('d/m/Y', strtotime($value->tanggal_mulai)) ?></td>
                                <td><?= date('d/m/Y', strtotime($value->tanggal_selesai)) ?></td>
                                <td><?= $value->deskripsi_acara ?></td>
                                <td><?= $value->status ?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('pemesanan/edit/' . $value->id_pemesanan) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('pemesanan/' . $value->id_pemesanan) ?>" method="post" class="d-inline" id="del-<?=$value->id_pemesanan?>">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" data-confirm="Hapus Data|Yakin Untuk Menghapus Data?" data-confirm-yes="submitDel(<?=$value->id_pemesanan?>)"><i class="fas fa-trash"></i></button>
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