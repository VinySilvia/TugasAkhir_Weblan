<?= $this->extend('layout/main'); ?>

<?= $this->section('menu') ?>

<li>
    <a href="/dashboard" class="waves-effect">
        <i class="mdi mdi-airplay"></i>
        <span> Beranda <span class="badge badge-pill badge-primary float-right">7</span></span>
    </a>
</li>

<li class="has_sub">
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Master </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="list-unstyled">
        <li><a href="dokter/view_dokter.php">Dokter</a></li>
        <li><a href="pasien/view_pasien.php">Pasien</a></li>
    </ul>
</li>

<li class="has_sub">
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Transaksi </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="list-unstyled">
        <li><a href="advanced-highlight.html">Rawat Inap</a></li>
        <li><a href="advanced-rating.html">Rawat Jalan</a></li>
        
    </ul>
</li>

<?= $this->endSection('') ?>