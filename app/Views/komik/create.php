<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Form Tambah Data</h2>

            <form action="/komik/save" method="post">

                <?php echo  csrf_field(); ?>

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control <?php echo ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?php echo old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control <?php echo ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?php echo old('penulis'); ?>">
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('penulis'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control <?php echo ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?php echo old('penerbit'); ?>">
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('penerbit'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <input type="text" class="form-control <?php echo ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?php echo old('sampul'); ?>">
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('sampul'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>