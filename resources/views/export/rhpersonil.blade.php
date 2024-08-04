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
            <li>Nama : {{ $personil->nama }} </li>
			<li>Pangkat : {{ $personil->kepangkatanSekarang->pangkat ?? '' }} </li>
			<li>NRP</li>
            <li>Tempat/Tanggal Lahir : {{ $personil->tempat_lahir }}/{{ $personil->tanggal_lahir }}</li>
			<li>TMT TNI : {{ $personil->tmt_tni }}</li>
			<li>Kategori : {{ $personil->status }}</li>
            <li>TMT : {{ $personil->tmt }}</li>
            <li>Suku Bangsa : {{ $personil->suku_bangsa }}</li>
		</ul>
		<ul id="header-right" title="web">
			<li>Agama : {{ $personil->agama }}</li>
			<li>Gol. Darah : {{ $personil->golongan_darah }}</li>
			<li>Sumber PA : {{ $personil->sumber_pa }}</li>
            <li>Jabatan : {{ $personil->jabatanSekarang->jabatan ?? '' }}</li>
            <li>TMT Jabatan : {{ $personil->jabatanSekarang->tmt ?? '' }}</li>
            <li>Satuan : {{ $personil->satuan->nama ?? '' }}</li>
            <li>Psi : {{ $personil->psi }}</li>
		</ul>
	</header>
	<section id="education"><h3>Pendidikan Umum</h3>
		<ul title="education">
		<li>
            @if ($personil->pendidikanUmum->count() > 0)
                @foreach ($personil->pendidikanUmum as $pendidikanUmum)
                    <h4>{{ $pendidikanUmum->tahun }}</h4>
                    <h4>{{ $pendidikanUmum->jenis_pendidikan }} - {{ $pendidikanUmum->nama_pendidikan }}</h4>
                    <ul>
                        <li>{{ $pendidikanUmum->prestasi }}</li>
                    </ul>
                @endforeach
            @endif
       	</li>
		</ul>
	</section>
  <section id="education"><h3>Pendidikan Militer</h3>
		<ul title="education">
		<li>
            @if ($personil->pendidikanMiliter->count() > 0)
                @foreach ($personil->pendidikanMiliter as $pendidikanMiliter)
                    <h4>{{ $pendidikanMiliter->tahun }}</h4>
                    <h4>{{ $pendidikanMiliter->jenis_dik }} - {{ $pendidikanMiliter->nama_dik }}</h4>
                    <ul>
                        <li>{{ $pendidikanMiliter->prestasi }}</li>
                    </ul>
                @endforeach
            @endif
		</ul>
	</section>
	<section id="skills"><h3>Riwayat Operasi</h3>
		<ul title="skills">
            @if ($personil->penugasanOperasi->count() > 0)
                @foreach ($personil->penugasanOperasi as $penugasanOperasi)
                    <li>{{ $penugasanOperasi->tahun }} - {{ $penugasanOperasi->nama_operasi }} - {{ $penugasanOperasi->prestasi }}</li>
                @endforeach
            @endif
		</ul>
	</section>
  <section id="skills"><h3>Riwayat Tanda Kehormatan</h3>
		<ul title="skills">
			@if ($personil->tandaJasa->count() > 0)
                @foreach ($personil->tandaJasa as $tandaJasa)
                    <li>{{ $tandaJasa->tanda_kehormatan }}</li>
                @endforeach
            @endif
		</ul>
	</section>
  <section id="skills"><h3>Bahasa Daerah</h3>
		<ul title="skills">
            @if ($personil->kemampuanBahasa->count() > 0)
                @foreach ($personil->kemampuanBahasa as $kemampuanBahasa)
                    <li>{{ $kemampuanBahasa->jenis_bahasa }} - {{ $kemampuanBahasa->nama }}</li>
                @endforeach
            @endif
		</ul>
	</section>
	<section id="experience"><h3>Riwayat Kepangkatan</h3>
	<ul title="experience">
		<li>
            @if ($personil->pangkat->count() > 0)
                @foreach ($personil->pangkat as $pangkat)
                    <h4>{{ $pangkat->tmt }} - {{ $pangkat->nomor_kep }}</h4>
                    <ul>
                        <li>{{ $pangkat->pangkat }}</li>
                    </ul>
                @endforeach
            @endif
	</ul>
	</section>
  <section id="experience"><h3>Riwayat Penugasan Luar Negeri</h3>
	<ul title="experience">
		<li>
            @if ($personil->penugasanLuarNegeri->count() > 0)
                @foreach ($personil->penugasanLuarNegeri as $penugasanLuarNegeri)
                    <h4>{{ $penugasanLuarNegeri->tahun }} - {{ $penugasanLuarNegeri->negara }}</h4>
                    <ul>
                        <li>{{ $penugasanLuarNegeri->macam_tugas }}</li>
                        <li>{{ $penugasanLuarNegeri->prestasi }}</li>
                    </ul>
                @endforeach
            @endif
		</li>
	</ul>
	</section>
  <section id="experience"><h3>Riwayat Jabatan</h3>
	<ul title="experience">
		<li>
            @if ($personil->jabatan->count() > 0)
                @foreach ($personil->jabatan as $jabatan)
                    <h4>{{ $jabatan->tmt }}</h4>
                    <ul>
                        <li>{{ $jabatan->jabatan }}</li>
                    </ul>
                @endforeach
            @endif
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
			@if ($personil->riwayat_keluarga_anak->count() > 0)
                @foreach ($personil->riwayat_keluarga_anak as $riwayat_keluarga_anak)
                    <li>{{ $riwayat_keluarga_anak->tanggal_lahir }} - {{ $riwayat_keluarga_anak->nama }}</li>
                @endforeach
            @endif
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
