@extends('layouts.masterapp')
@section('title', 'Dashboard Peserta')

@if(!empty($user->category_id))
@if($user->category_id == 1)
    @section('content')
            <div id='content'>
            <section id="login" class='first-section content-section content-terang'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-9 mx-auto'>
                            <h2 class="judul-section my-3 text-center" style="text-transform: capitalize;">Selamat Datang,<br>{{ $user->name }}!</h2>
                            @include('layouts.partials.notification')
                            <div class="card mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                @if($user->status == 1)
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class="badge badge-pill badge-success mr-1"><i class="fas fa-award"></i></span> Pengumuman
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class="badge badge-pill badge-success mr-1">1</span>Lengkapi Data 
                                            @if(!empty($user->ktm))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><span class="badge badge-pill badge-success mr-1">2</span>Unggah Paper
                                        @if(!empty($user->paper))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><span class="badge badge-pill badge-success mr-1">3</span>Bukti Pembayaran
                                        @if(!empty($user->transaction))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false"><span class="badge badge-pill badge-success mr-1">4</span>Finalisasi</a></a>
                                    </li>
                                @endif
                                </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                            @if($user->status == 1)
                                <div class="tab-pane fade show active p-4" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    @include('paper.announcement')             
                                </div>
                            @else
                                <div class="tab-pane fade show active p-4" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    @include('paper.selfdata')             
                                </div>
                                <div class="tab-pane fade p-4" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    @include('paper.uploadpaper')             
                                </div>
                                <div class="tab-pane fade p-4" id="three" role="tabpanel" aria-labelledby="three-tab">
                                    @include('paper.transaction')               
                                </div>
                                <div class="tab-pane fade p-4" id="four" role="tabpanel" aria-labelledby="four-tab">
                                    @include('paper.finalization')  
                                </div>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@elseif($user->category_id == 2)
    @section('content')
            <div id='content'>
            <section id="login" class='first-section content-section content-terang'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-9 mx-auto'>
                            <h2 class="judul-section my-3 text-center" style="text-transform: capitalize;">Selamat Datang,<br>{{ $user->name }}!</h2>
                            @include('layouts.partials.notification')
                            <div class="card mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                @if($user->status == 1)
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class="badge badge-pill badge-success mr-1"><i class="fas fa-award"></i></span> Pengumuman
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class="badge badge-pill badge-success mr-1">1</span>Lengkapi Data 
                                            @if(!empty($user->team_name) && !empty($user->team1) && !empty($user->team2) && !empty($user->team3))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><span class="badge badge-pill badge-success mr-1">2</span>Unggah Paper
                                        @if(!empty($user->ktm))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><span class="badge badge-pill badge-success mr-1">3</span>Bukti Pembayaran
                                        @if(!empty($user->transaction))
                                            <i class="fas fa-check-circle text-warning"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false"><span class="badge badge-pill badge-success mr-1">4</span>Finalisasi</a></a>
                                    </li>
                                @endif
                                </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                            @if($user->status == 1)
                                <div class="tab-pane fade show active p-4" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    @include('audit.announcement')             
                                </div>
                            @else
                                <div class="tab-pane fade show active p-4" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    @include('audit.selfdata')             
                                </div>
                                <div class="tab-pane fade p-4" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    @include('audit.uploadteam')             
                                </div>
                                <div class="tab-pane fade p-4" id="three" role="tabpanel" aria-labelledby="three-tab">
                                    @include('audit.transaction')               
                                </div>
                                <div class="tab-pane fade p-4" id="four" role="tabpanel" aria-labelledby="four-tab">
                                    @include('audit.finalization')  
                                </div>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@else
    Kategori lomba tidak dipilih.
@endif
@endif

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