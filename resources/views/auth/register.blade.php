@extends('layouts.masterapp')
@section('title', 'Pendaftaran Peserta')

@section('content')
    <div id='content'>
        <section id="pendaftaran" class='first-section content-section content-terang'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6'>
                        <h2 class="judul-section my-3">Pendaftaran<br>Peserta Auditphoria</h2>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="email">Alamat Email</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Alamat Email">
                            </div>
                            @error('email')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="password">Password</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            </div>
                            @error('password')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="password-confirm">Ulangi Password</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="name">Nama Lengkap</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">
                            </div>
                            @error('name')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="university">Asal Universitas</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-university"></i></span>
                                </div>
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ old('university') }}" required autocomplete="university" placeholder="Asal Universitas">
                            </div>
                            @error('university')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="grade_id">Jenjang Pendidikan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-graduation-cap"></i></span>
                                </div>
                                <select id="grade_id" name="grade_id" class="form-control @error('grade_id') is-invalid @enderror" required autocomplete="grade_id">
                                    <option disabled selected>Pilih jenjang..</option>
                                    @foreach(App\Grade::orderBy('description', 'desc')->get() as $grade)
                                <option value="{{ $grade->id }}" {{ (old("grade_id") == $grade->id ? "selected":"") }}>{{ $grade->description }} ({{ $grade->title }})</option>
                                    @endforeach
                                    </select>
                            </div>
                            @error('grade_id')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="whatsapp">No. WhatsApp</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fab fa-whatsapp"></i></span>
                                </div>
                                <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp" autofocus placeholder="No. WhatsApp">
                            </div>
                            @error('whatsapp')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="line">ID Line</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{ old('line') }}" required autocomplete="line" autofocus placeholder="ID Line">
                            </div>
                            @error('line')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="category_id">Pilih Kategori Lomba</label>
                            <div class="input-group flex-nowrap">
                            @foreach(App\Category::orderBy('title', 'asc')->get() as $category)
                                <label>
                                <input type="radio" name="category_id" class="card-input-element d-none" id="category{{ $category->id }}" {{ (old('category_id') == $category->id ? 'checked="checked"':'') }} value="{{ $category->id }}">
                                    <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center"><i class="fas fa-award mr-2"></i>
                                    {{ $category->title }}
                                    </div>
                                </label>
                            @endforeach
                            </div>
                            @error('category_id')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <hr>
                        <div class="form-group form-check">
                            <input name="agreement" type="checkbox" class="form-check-input" id="agreement">
                            <label class="form-check-label" for="agreement">Saya menyetujui <a href="#" class="text-danger">syarat dan ketentuan</a> yang ditetapkan oleh panitia {{ config('app.name') }}.</label>

                             @error('agreement')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-luana btn-danger btn-lg my-3" role="button" style="background-image: url('assets/img/particle/button.png');">Daftar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrasi Akun') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('Nama Universitas') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ old('university') }}" required autocomplete="university">
                            </div>

                             @error('university')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>

                        <div class="form-group row">
                            <label for="whatsapp" class="col-md-4 col-form-label text-md-right">{{ __('No. WhatsApp') }}</label>

                            <div class="col-md-6">
                                <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp">
                            </div>

                             @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>

                        <div class="form-group row">
                            <label for="line" class="col-md-4 col-form-label text-md-right">{{ __('ID Line') }}</label>

                            <div class="col-md-6">
                                <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{ old('line') }}" required autocomplete="line">
                            </div>

                             @error('line')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
