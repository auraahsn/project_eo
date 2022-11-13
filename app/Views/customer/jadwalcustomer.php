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
        <div class="container">
            <!-- ROW 1 -->
            <div class="row">

            </div>
</section>
<?= $this->endSection() ?>