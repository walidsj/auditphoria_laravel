@extends('layouts.masterapp')
@section('title', 'Lomba Call for Paper')

@section('content')
        <div id='content'>
        <section id="call-for-paper" class='first-section content-section content-gelap'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="pb-5 text-center">
                            <img class="img-about" src="assets/img/galeri/11.jpg" alt="Galeri Auditphoria" style="width: 90%">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <h2 class="judul-section my-3">Call for Paper</h2>
                        <p>Lomba Paper merupakan perlombaan yang diperuntukkan untuk umum. Paper merupakan jenis karya tulis ilmiah yang ditulis secara terperinci dan merupakan hasil dari suatu penelitian atau aktivitas sejenis.</p>
                        <p>Lomba Paper kali ini mengusung tema <strong>“Green Audit dalam Sektor Perekonomian Indonesia”</strong></p>
                        <a href="{{ route('register') }}" class="btn btn-luana btn-danger btn-sm my-2 mr-3" role="button" style="background-image: url('assets/img/particle/button.png');">Link Pendaftaran</a>
                        <a class="btn btn-sm btn-outline-secondary my-2" href="assets/doc/booklet/Booklet Paper Auditphoria 2.0.docx">Lihat Ketentuan</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="time-line" class='content-section content-terang'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <h2 class="judul-section my-3">Timeline Call for Paper</h2>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <p>Agenda kegiatan Call For Paper Auditphoria 2.0 dijadwalkan sebagai berikut :
                        </p>
                        <ol>
                            <li>Batas Registrasi + extend : 13 Januari 2020 - 1 Februari 2020</li>
                            <li> Batas Pembayaran Registrasi : 2 Februari 2020</li>
                            <li>Batas Pengumpulan Paper : 14 Januari 2020 - 15 Februari 2020</li>
                            <li>Penilaian : 15 Februari – 22 Februari 2020</li>
                            <li>Pengumuman Grand Finalis Lomba : 23 Februari 2020</li>
                            <li>Pengumpulan Softcopy Presentasi : 23 Februari 2020 – 1 Maret 2020</li>
                            <li>Technical Meeting : 23 Maret 2020</li>
                            <li>Grand Final : 25 Maret 2020</li>
                            <li>Field Trip : 26 Maret 2020</li>
                            <li>Awarding Night : 27 Maret 2020</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection