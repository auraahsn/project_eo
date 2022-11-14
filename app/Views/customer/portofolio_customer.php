<?= $this->extend('layout/defaultAdmin') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Portofolio</h1>
    </div>

    <?php if (session()->getFlashdata('status')) {
        echo "<h5>" . session()->getFlashdata('status') . "</h5>";
    } ?>

    <div class="section-body">
        <br>
        <div class="container">
            <!-- ROW 1 -->
            <div class="row">
                <?php foreach ($portofolio as $item) : ?>
                    <div class="col-sm-4">
                        <div class="card card-primary" style="width: 17rem;">
                            <img class="rounded mx-auto d-block mt-2" src="<?php echo base_url('/uploads/'.$item['foto'])?>" height="200px" width="250px" alt="foto">
                            <div class="card-body">
                              
                                <b><p><a href="#"><?php echo $item['title'] ?></a></p></b>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
</section>
<?= $this->endSection() ?>