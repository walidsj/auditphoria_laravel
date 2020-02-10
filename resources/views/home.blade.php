@extends('layouts.masterapp')
@section('title', 'Dashboard Peserta')

@section('content')
        <div id='content'>
        <section id="login" class='first-section content-section content-terang'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-9 mx-auto'>
                        <h2 class="judul-section my-3 text-center" style="text-transform: capitalize;">Selamat Datang,<br>{{ $user->name }}!</h2>

                        <div class="card mt-3 tab-card">
                            <div class="card-header tab-card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class="badge badge-pill badge-success mr-1">1</span>Lengkapi Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><span class="badge badge-pill badge-success mr-1">2</span>Unggah Paper</a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><span class="badge badge-pill badge-success mr-1">3</span>Bukti Pembayaran
                                <li class="nav-item">
                                    <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false"><span class="badge badge-pill badge-success mr-1">4</span>Finalisasi</a></a>
                                </li>
                            </ul>
                            </div>

                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-4" id="one" role="tabpanel" aria-labelledby="one-tab">
                                @include('paper.selfdata')             
                            </div>
                            <div class="tab-pane fade p-4" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <h5 class="card-title">Tab Card Two</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>              
                            </div>
                            <div class="tab-pane fade p-4" id="three" role="tabpanel" aria-labelledby="three-tab">
                                <h5 class="card-title">Tab Card Three</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>              
                            </div>
                            <div class="tab-pane fade p-4" id="four" role="tabpanel" aria-labelledby="four-tab">
                                <h5 class="card-title">Tab Card Four</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>              
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class='col-md-4'>
                        <img class="img-about" src="assets/img/galeri/5.jpg" alt="Galeri Auditphoria" style="width: 80%">
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}