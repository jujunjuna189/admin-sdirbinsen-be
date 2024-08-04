<!DOCTYPE html>
<head>

<title>Name</title>

<style type="text/css">
html {
    background: white;
    color: black;
    font: 14px Arial, sans-serif;
}
body {
    margin: 2em auto;
    max-width: 760px;
    width: 65%;
}
section {
    clear: both;
    margin-top: 3em;
}
li {
    list-style-type: disc;
}
section > ul > li,
header > ul > li {
    list-style-type: none;
    margin-bottom: .5em;
}
.headline-name {
    border-bottom: 1px solid black;
    padding-bottom: .5em;
}
.contact-column {
    float: left;
    padding: 0 1px;
}
a,
a:link,
a:visited {
    border-bottom: 1px dotted rgb(0, 120, 180);
    color: rgb(0, 120, 180);
    padding: .2em .1em;
    text-decoration: none;
}
a:focus,
a:hover,
a:active {
    background-color: rgb(255, 245, 0);
    border-bottom: 1px solid rgb(0, 120, 180);
    color: rgb(0, 120, 180);
}
@media print {
    html {
        color: black;
        font-size: 12px;
    }
    body {
        margin: 1.5em;
        width: 90%;
    }
    section {
        margin-top: 1em;
    }
    a,
    a:link,
    a:visited {
        border: none;
        color: black;
    }
}
</style>

</head>
<body>
	<header>
		<h2>Data Pokok</h2>
		<ul id="header-left" title="mail and phone">
            <li>Nama : <?php echo e($personil->nama); ?> </li>
			<li>Pangkat : <?php echo e($personil->kepangkatanSekarang->pangkat ?? ''); ?> </li>
			<li>NRP</li>
            <li>Tempat/Tanggal Lahir : <?php echo e($personil->tempat_lahir); ?>/<?php echo e($personil->tanggal_lahir); ?></li>
			<li>TMT TNI : <?php echo e($personil->tmt_tni); ?></li>
			<li>Kategori : <?php echo e($personil->status); ?></li>
            <li>TMT : <?php echo e($personil->tmt); ?></li>
            <li>Suku Bangsa : <?php echo e($personil->suku_bangsa); ?></li>
		</ul>
		<ul id="header-right" title="web">
			<li>Agama : <?php echo e($personil->agama); ?></li>
			<li>Gol. Darah : <?php echo e($personil->golongan_darah); ?></li>
			<li>Sumber PA : <?php echo e($personil->sumber_pa); ?></li>
            <li>Jabatan : <?php echo e($personil->jabatanSekarang->jabatan ?? ''); ?></li>
            <li>TMT Jabatan : <?php echo e($personil->jabatanSekarang->tmt ?? ''); ?></li>
            <li>Satuan : <?php echo e($personil->satuan->nama ?? ''); ?></li>
            <li>Psi : <?php echo e($personil->psi); ?></li>
		</ul>
	</header>
	<section id="education"><h3>Pendidikan Umum</h3>
		<ul title="education">
		<li>
            <?php if($personil->pendidikanUmum->count() > 0): ?>
                <?php $__currentLoopData = $personil->pendidikanUmum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikanUmum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($pendidikanUmum->tahun); ?></h4>
                    <h4><?php echo e($pendidikanUmum->jenis_pendidikan); ?> - <?php echo e($pendidikanUmum->nama_pendidikan); ?></h4>
                    <ul>
                        <li><?php echo e($pendidikanUmum->prestasi); ?></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
       	</li>
		</ul>
	</section>
  <section id="education"><h3>Pendidikan Militer</h3>
		<ul title="education">
		<li>
            <?php if($personil->pendidikanMiliter->count() > 0): ?>
                <?php $__currentLoopData = $personil->pendidikanMiliter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikanMiliter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($pendidikanMiliter->tahun); ?></h4>
                    <h4><?php echo e($pendidikanMiliter->jenis_dik); ?> - <?php echo e($pendidikanMiliter->nama_dik); ?></h4>
                    <ul>
                        <li><?php echo e($pendidikanMiliter->prestasi); ?></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</ul>
	</section>
	<section id="skills"><h3>Riwayat Operasi</h3>
		<ul title="skills">
            <?php if($personil->penugasanOperasi->count() > 0): ?>
                <?php $__currentLoopData = $personil->penugasanOperasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penugasanOperasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($penugasanOperasi->tahun); ?> - <?php echo e($penugasanOperasi->nama_operasi); ?> - <?php echo e($penugasanOperasi->prestasi); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</ul>
	</section>
  <section id="skills"><h3>Riwayat Tanda Kehormatan</h3>
		<ul title="skills">
			<?php if($personil->tandaJasa->count() > 0): ?>
                <?php $__currentLoopData = $personil->tandaJasa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tandaJasa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($tandaJasa->tanda_kehormatan); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</ul>
	</section>
  <section id="skills"><h3>Bahasa Daerah</h3>
		<ul title="skills">
            <?php if($personil->kemampuanBahasa->count() > 0): ?>
                <?php $__currentLoopData = $personil->kemampuanBahasa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kemampuanBahasa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($kemampuanBahasa->jenis_bahasa); ?> - <?php echo e($kemampuanBahasa->nama); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</ul>
	</section>
	<section id="experience"><h3>Riwayat Kepangkatan</h3>
	<ul title="experience">
		<li>
            <?php if($personil->pangkat->count() > 0): ?>
                <?php $__currentLoopData = $personil->pangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($pangkat->tmt); ?> - <?php echo e($pangkat->nomor_kep); ?></h4>
                    <ul>
                        <li><?php echo e($pangkat->pangkat); ?></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
	</ul>
	</section>
  <section id="experience"><h3>Riwayat Penugasan Luar Negeri</h3>
	<ul title="experience">
		<li>
            <?php if($personil->penugasanLuarNegeri->count() > 0): ?>
                <?php $__currentLoopData = $personil->penugasanLuarNegeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penugasanLuarNegeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($penugasanLuarNegeri->tahun); ?> - <?php echo e($penugasanLuarNegeri->negara); ?></h4>
                    <ul>
                        <li><?php echo e($penugasanLuarNegeri->macam_tugas); ?></li>
                        <li><?php echo e($penugasanLuarNegeri->prestasi); ?></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</li>
	</ul>
	</section>
  <section id="experience"><h3>Riwayat Jabatan</h3>
	<ul title="experience">
		<li>
            <?php if($personil->jabatan->count() > 0): ?>
                <?php $__currentLoopData = $personil->jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($jabatan->tmt); ?></h4>
                    <ul>
                        <li><?php echo e($jabatan->jabatan); ?></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</li>
	</ul>
	</section>
  <section id="skills"><h3>Riwayat Keluarga</h3>
		<ul title="skills">
			<li>Status: KAWIN</li>
            <li>Jumlah Anak: 3</li>
            <li>Alamat Tinggal: ASRAMA</li>
            <li>Nomor HP: 0888888888</li>
            <li>Nama Ayah: Jiji</li>
            <li>Nama Ibu: Haha</li>
            <li>Alamat Orang Tua: Jl Pramuka</li>
            <li>Nama Istri/Suami: Suami</li>

		</ul>
	</section>
  <section id="skills"><h3>Riwayat Keluarga Anak</h3>
		<ul title="skills">
			<?php if($personil->riwayat_keluarga_anak->count() > 0): ?>
                <?php $__currentLoopData = $personil->riwayat_keluarga_anak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayat_keluarga_anak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($riwayat_keluarga_anak->tanggal_lahir); ?> - <?php echo e($riwayat_keluarga_anak->nama); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
		</ul>
	</section>
  <section id="experience"><h3>Riwayat Prestasi</h3>
	<ul title="experience">
		<li>
            <h4>2013 - Tempat</h4>
			<ul>
				<li>Piagam</li>
                <li>Kegiatan</li>
                <li>Deskripsi</li>
			</ul>
		</li>
	</ul>
	</section>
</body>
</html>
<?php /**PATH /home/hplbzcom/api-dev.sdirbinsen.com/resources/views/export/rhpersonil.blade.php ENDPATH**/ ?>