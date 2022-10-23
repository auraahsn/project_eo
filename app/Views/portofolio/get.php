<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Portofolio</h1>
        <div class="section-header-button">
            <a href="<?= site_url('portofolio/add') ?>" class="btn btn-primary">Add</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('status')) {
        echo "<h5>" . session()->getFlashdata('status') . "</h5>";
    } ?>

    <div class="section-body">
        <div class="container">
            <!-- ROW 1 -->
            <div class="row">
                <?php foreach ($portofolio as $item) : ?>
                    <div class="col-sm-4">
                        <div class="card card-primary" style="width: 17rem;">
                            <img class="rounded mx-auto d-block mt-2" src="<?= "uploads/" . $item['foto']; ?>" height="200px" width="250px" alt="foto">
                            <div class="card-body">
                                <?= $item['title'] ?>
                                <a href="<?= base_url('portofolio/edit/' . $item['id']) ?>" class="btn btn-warning btn-sm ml-3"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?= base_url('portofolio/delete/' . $item['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
</section>
<?= $this->endSection() ?>