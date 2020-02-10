             <h5 class="card-title text-bold">Unggah Kartu Tanda Mahasiswa</h5>
                <p class="card-text">Silakan unggah KTM ketua dan anggota tim Anda.</p>
                @if(!empty($user->ktm))
                <div class="alert alert-info alert-block">
                    <strong><i class="fas fa-info-circle mr-2"></i> Kartu Tanda Mahasiswa peserta diunggah dan disimpan!</strong>
                </div>
                @endif
                <form method="post" action="{{ route('upload_ktm') }}" method="post" enctype="multipart/form-data">
                     @csrf
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="name">Identitas Peserta dan Tim</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Lengkap" disabled value="{{ $user->name }} / {{ $user->team_name }} ({{ $user->email }})">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="ktm" class="form-label" ><b>Unggah Kartu Tanda Mahasiswa</b> <small class="text-danger">(max. 10 MB, zip/rar)</small></label>
                            <input type="file" class="form-control mb-3 @error('ktm') is-invalid @enderror" name="ktm" id="ktm" required>

                                        @error('ktm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            {!! (!empty($user->ktm)) ? "<b>KTM Terupload:</b> ".$user->ktm : "" !!}
                        </div>
                        <hr>
                        <div class="form-group form-check">
                            <input name="agreement" type="checkbox" class="form-check-input" id="agreement-uploadpaper">
                            <label class="form-check-label" for="agreement-uploadpaper">Saya menyetujui syarat dan ketentuan yang telah ditetapkan oleh Panitia Auditphoria.</label>

                             @error('agreement')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-luana btn-danger btn-lg my-3" role="button" style="background-image: url('assets/img/particle/button.png');">Unggah</button>
                        </div>
                        </form>