             <h5 class="card-title text-bold">Unggah Bukti Pembayaran</h5>
                <p class="card-text">Silakan unggah bukti pembayaran yang telah Anda lakukan.</p>
                @if(!empty($user->transaction))
                <div class="alert alert-info alert-block">
                    <strong><i class="fas fa-info-circle mr-2"></i> Bukti Pembayaran berhasil diunggah dan disimpan! </strong>
                </div>
                @endif
                <form method="post" action="{{ route('upload_transaction_audit') }}" method="post" enctype="multipart/form-data">
                     @csrf
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="name">Identitas Peserta</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Lengkap" disabled value="{{ $user->name }} / {{ $user->team_name }} ({{ $user->email }})">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="transaction" class="form-label" ><b>Unggah Bukti Pembayaran</b> <small class="text-danger">(max. 2 MB, jpg/jpeg/png/pdf)</small></label>
                            <input type="file" class="form-control mb-3 @error('transaction') is-invalid @enderror" name="transaction" id="transaction" required>

                                        @error('transaction')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            {!! (!empty($user->transaction)) ? "<b>Bukti Pembayaran Terupload:</b> ".$user->transaction : "" !!}
                        </div>
                        <hr>
                        <div class="form-group form-check">
                            <input name="agreement" type="checkbox" class="form-check-input" id="agreement-uploadtransaction">
                            <label class="form-check-label" for="agreement-uploadtransaction">Saya menyetujui syarat dan ketentuan yang telah ditetapkan oleh Panitia Auditphoria.</label>

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