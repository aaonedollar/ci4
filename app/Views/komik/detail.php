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
                            <a class="btn btn-warning" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                            <br><br>
                            <a href="/">Kembali ke daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>