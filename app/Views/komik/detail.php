<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/<?= $d['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $d['judul']; ?></h5>
                            <p class="card-text"><?= $d['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $d['penerbit']; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>