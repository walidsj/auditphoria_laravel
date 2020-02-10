             <h5 class="card-title text-bold">Data Peserta dan Tim</h5>
                <p class="card-text">Silakan periksa dan lengkapi data Anda.</p>
                @if(!empty($user->team_name) && !empty($user->team1) && !empty($user->team2))
                <div class="alert alert-info alert-block">
                    <strong><i class="fas fa-info-circle mr-2"></i> Data Peserta dan Tim telah dilengkapi dan berhasil disimpan! </strong>
                </div>
                @endif
                <form method="post" action="{{ route('update_dataaudit') }}" method="post" enctype="multipart/form-data">
                     @csrf
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="email">Alamat Email</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input class="form-control" placeholder="Alamat Email" disabled="" value="{{ $user->email }}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="team_name">Nama Tim</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror" name="team_name" value="{{ $user->team_name }}" required autocomplete="team_name" placeholder="Nama Tim">
                            </div>
                            @error('team_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="name">Nama Ketua Tim</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
                            </div>
                            @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="team1">Nama Anggota Tim 1</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="team1" type="text" class="form-control @error('team1') is-invalid @enderror" name="team1" value="{{ $user->team1 }}" required autocomplete="team1" placeholder="Nama Anggota Tim 1">
                            </div>
                            @error('team1')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="team2">Nama Anggota Tim 2</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="team2" type="text" class="form-control @error('team2') is-invalid @enderror" name="team2" value="{{ $user->team2 }}" required autocomplete="team2" placeholder="Nama Anggota Tim 2">
                            </div>
                            @error('team2')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="university">Asal Universitas</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-university"></i></span>
                                </div>
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ $user->university }}" required autocomplete="university">
                            </div>
                            @error('university')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="jenjang">Jenjang Pendidikan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-graduation-cap"></i></span>
                                </div>
                                <select id="grade_id" name="grade_id" class="form-control @error('grade_id') is-invalid @enderror" required autocomplete="grade_id">
                                    <option disabled selected>Pilih jenjang..</option>
                                    @foreach(App\Grade::orderBy('description', 'desc')->get() as $grade)
                                <option value="{{ $grade->id }}" {{ ($user->grade_id == $grade->id ? "selected":"") }}>{{ $grade->description }} ({{ $grade->title }})</option>
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
                                <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $user->whatsapp }}" required autocomplete="whatsapp">
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
                                    <span class="input-group-text" id="addon-wrapping"><i class="fab fa-line"></i></span>
                                </div>
                                <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{ $user->line }}" required autocomplete="line">
                            </div>

                            @error('line')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group form-check">
                            <input name="agreement" type="checkbox" class="form-check-input" id="agreement">
                            <label class="form-check-label" for="agreement">Saya telah mengisi data diri dengan sebenar-benarnya dan bertanggungjawab secara penuh atas yang saya isikan.</label>

                             @error('agreement')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-luana btn-danger btn-lg my-3" role="button" style="background-image: url('assets/img/particle/button.png');">Submit</button>
                        </div>
                        </form>