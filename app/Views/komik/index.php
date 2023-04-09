<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <table class="table table-striped table-hover my-5">
                <thead class="thead-dark">
                    <th>No</th>
                    <th>Sampul</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <tr class="align-items-center tr">
                        <td>
                            1
                        </td>
                        <td>
                            <img src="/images/naruto.jpg" alt="" style="width:50px">
                        </td>
                        <td>
                            Naruto
                        </td>
                        <td>
                            <button class="btn btn-success">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>