<?php echo $this->extend('layout/template'); ?>


<?php echo $this->section('content'); ?>

<ul>
    <?php foreach ($test as $a) : ?>
        <li>
            <?php echo $a['nama']; ?>
        </li>
        <li>
            <?php echo $a['alamat']; ?>
        </li>
        <li>
            <?php echo $a['nomor']; ?>
        </li>

    <?php endforeach; ?>
</ul>


<?php echo $this->endSection(); ?>