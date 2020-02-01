@extends('layouts.masterapp')

@section('header')
   <header id='hero'>
        <div class='layer-bg layer' data-depth='0.10' data-type='parallax' style='background-image: url("assets/img/hero/layer-bg-min.png");'></div>
        <div class='layer-1 layer' data-depth='0.20' data-type='parallax' style='background-image: url("assets/img/hero/layer-1-min.png");'></div>
        <div class='layer-2 layer' data-depth='0.50' data-type='parallax' style='background-image: url("assets/img/hero/layer-2-min.png");'></div>
        <div class='layer-3 layer' data-depth='0.80' data-type='parallax' style='background-image: url("assets/img/hero/layer-3-min.png");'></div>
        <div class='layer-4 layer' data-depth='0.85' data-type='parallax' style='background-image: url("assets/img/hero/layer-4-min.png");'></div>
        <div class='layer-5 layer' data-depth='1.00' data-type='parallax' style='background-image: url("assets/img/hero/layer-5-min.png");'></div>

        <div class="layer-top layer" data-depth='0.65' data-type='parallax'>
            <div class="container">
                <nav class="navbar navbar-top navbar-expand-lg navbar-light bg-transparent">
                    <!-- <nav class="navbar navbar-top navbar-expand-lg navbar-light bg-transparent px-6"> -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/img/logo-depan.png" alt="{{ config('app.name') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li id="menu_tentang" class="nav-item">
                                <a class="nav-link" href="#tentang">Tentang</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lomba
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="event-lomba/call-for-paper">Call for Paper</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="event-lomba/audit">Lomba Audit</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontak">Kontak</a>
                            </li>
                            @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pendaftaran
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="peserta/daftar-paper">Call for Paper</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Audit</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-danger my-0" href="{{ route('login') }}">Masuk</a>
                            </li>
                            @else
                            <li class="nav-item">
                            <a class="btn btn-outline-danger my-0" href="{{ route('home') }}">Area Peserta</a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>

                <div class="jumbotron banner text-center" data-aos="fade-up">
                    <!-- <div class='container text-center'> -->
                    <span class="judul-tahun">{{ config('app.year') }}</span>
                    <h1 class="judul-besar">{{ config('app.name') }}</h1>
                    <h2 class="deskripsi my-1">{{ config('app.jargon') }}</h2>
                    <a class="btn btn-luana btn-danger btn-lg my-3" id="bangsat" href="#tentang" role="button" style="background-image: url('assets/img/particle/button.png');">Ayo Mulai!</a>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
        <div id='content'>
        <section id="tentang" class='first-section content-section content-gelap'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="pb-5">
                            <img class="img-about" src="assets/img/galeri/3.jpg" alt="Galeri Auditphoria">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <h2 class="judul-section my-3">Tentang Auditphoria</h2>
                        <p>{{ config('app.name') }} adalah suatu rangkaian acara berupa lomba, talkshow, dan kegiatan sosial yang diselenggarakan oleh Badan Audit Kemahasiswaan Politeknik Keuangan Negara STAN. {{ config('app.name') }} akan berlangsung pada tanggal 2 - 28 Maret 2020.</p>
                        <a class="btn btn-sm btn-outline-secondary my-2" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div id="divider">
            <div class='layer-divide-1 layer-divide' data-depth='0.10' data-type='parallax' style='background-image: url("assets/img/divider-parallax/layer 4.png");'></div>
            <div class='layer-divide-2 layer-divide' data-depth='0.20' data-type='parallax' style='background-image: url("assets/img/divider-parallax/layer 3.png");'></div>
            <div class='layer-divide-3 layer-divide' data-depth='0.50' data-type='parallax' style='background-image: url("assets/img/divider-parallax/layer 2.png");'></div>
            <div class='layer-divide-4 layer-divide' data-depth='0.80' data-type='parallax' style='background-image: url("assets/img/divider-parallax/layer 1.png");'></div>
        </div> -->

        <section id="time-line" class='content-section content-terang'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-7'>
                        <h2 class="judul-section my-3">Timeline Auditphoria</h2>
                        <p>{{ config('app.name') }} ini dimulai dengan <i>Opening</i>, di dalam <i>Opening</i> ini akan diadakan <i>Happy Run</i>, <i>Auditfest</i>, dan <i>Gala Dinner</i>. Selanjutnya akan dilanjutkan dengan Seminar Integritas.</p>
                        <p>Hari berikutnya adalah rangkaian lomba. Lomba yang diadakan adalah Lomba Audit dan Lomba Paper. Dalam Lomba Audit akan dibagi dalam beberapa tahap, dimulai dari babak eliminasi, lomba cerdas cermat (LCC), debat, dan kasus. Dan pada puncaknya adalah <i>Closing</i> yang akan menampilkan kesenian yang ada di PKN STAN.</p>
                    </div>
                    <div class='col-sm-5'>
                        <div class="pb-5">
                            <img class="img-about" src="assets/img/galeri/1.jpg" alt="Galeri Auditphoria">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="galeri" class='content-section content-gelap'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12 text-center'>
                        <h2 class="judul-section my-3">Galeri Auditphoria</h2>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="galeri-luana">
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/9.jpg" alt="Galeri Auditphoria"></div>
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/1.jpg" alt="Galeri Auditphoria"></div>
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/3.jpg" alt="Galeri Auditphoria"></div>
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/5.jpg" alt="Galeri Auditphoria"></div>
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/6.jpg" alt="Galeri Auditphoria"></div>
                            <div class="galeri-item"><img class="img-galeri" src="assets/img/galeri/7.jpg" alt="Galeri Auditphoria"></div>
                        </div>
                        <div class="text-center pt-3">
                            <a class="btn btn-sm btn-outline-secondary my-2" href="#">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection