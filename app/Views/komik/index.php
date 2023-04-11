<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">

            <div class="row d-flex justify-content-between">
                <h3 class="col">Komik</h3>
                <a href="/create" class="col-2 btn btn-primary">Tambah Data</a>
            </div>

            <table class="table table-striped table-hover my-5">
                <thead class="thead-dark">
                    <th>No</th>
                    <th>Sampul</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $row) : ?>

                        <tr class="align-items-center tr">
                            <td>

                                <?= $i++; ?>
                            </td>
                            <td>
                                <img src="/images/<?= $row['sampul']; ?>" alt="" style="width:50px">
                            </td>
                            <td>
                                <?= $row['judul']; ?>
                            </td>
                            <td>
                                <a href="/komik/<?= $row['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>