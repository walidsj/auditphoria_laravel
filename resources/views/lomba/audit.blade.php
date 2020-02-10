@extends('layouts.masterapp')
@section('title', 'Lomba Audit')

@section('content')
<div id='content'>
        <section id="call-for-paper" class='first-section content-section content-gelap'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="pb-5">
                            <img class="img-about" src="assets/img/galeri/3.jpg" alt="Galeri Auditphoria" style="width: 90%">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <h2 class="judul-section my-3">Lomba Audit</h2>
                        <p>Audit Competition merupakan sebuah kompetisi berkelompok yang dimaksudkan untuk dapat meningkatkan pengetahuan dan keterampilan mahasiswa PKN STAN dalam bidang auditing sebagai bekal dalam dunia kerja di pemerintahan.</p>
                        <p>Lomba Audit terdiri atas babak <strong>Preliminary Round</strong> yang diadakan secara online dan babak <strong>Audit Competition and Challenge</strong> yaitu Lomba Cerdas Cermat, Debat, dan Kasus.</p>
                    <a href="{{ route('register') }}" class="btn btn-luana btn-danger btn-sm my-2 mr-3" role="button" style="background-image: url('assets/img/particle/button.png');">Link Pendaftaran</a>
                        <a class="btn btn-sm btn-outline-secondary my-2" href="https://drive.google.com/folderview?id=1-8JBeK82H6UNqzkDyqwn-KfAyZwlFW0M">Lihat Ketentuan</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="time-line" class='content-section content-terang'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <h2 class="judul-section my-3">Timeline Lomba Audit</h2>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <p>Agenda kegiatan Lomba Audit Auditphoria 2.0 dijadwalkan sebagai berikut :
                        </p>
                        <ol>
                            <li>Registrasi : 8 Februari – 8 Maret 2020</li>
                            <li>Pembayaran : 8 Februari – 9 Maret 2020</li>
                            <li>Simulasi : 13 Maret 2020</li>
                            <li>Preliminary Round : 15 Maret 2020</li>
                            <li>Koreksi : 15-17 Maret 2020</li>
                            <li>Pengumuman : 18 Maret 2020</li>
                            <li>Opening : 22 Maret 2020</li>
                            <li>Lomba Cerdas Cermat : 24 Maret 2020</li>
                            <li>Lomba Debat : 25 Maret 2020</li>
                            <li>Lomba Kasus : 27 Maret 2020</li>
                            <li>Awarding Ceremony : 28 Maret 2020</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection