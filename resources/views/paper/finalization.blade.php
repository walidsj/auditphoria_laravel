             <h5 class="card-title text-bold">Finalisasi Data Peserta dan Dokumen</h5>
                <p class="card-text">Silakan melakukan finalisasi jika semua data telah terisi dengan benar.</p>
                @if(($user->transaction) == 1)
                <div class="alert alert-info alert-block">
                    <strong><i class="fas fa-info-circle mr-2"></i> Bukti Pembayaran berhasil diunggah dan disimpan! </strong>
                </div>
                @endif
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="name">Identitas Peserta</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Lengkap" disabled value="{{ $user->name }}  ({{ $user->email }})">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label-form" for="name">Tahap Pendaftaran</label>
                            <ol>
                                <li>Lengkapi Data Diri
                                    @if(!empty($user->ktm))
                                        <span class="badge badge-pill badge-warning"><i class="fas fa-award"></i> Selesai</span>
                                    @endif
                                </li>
                                <li>Unggah Karya Paper
                                    @if(!empty($user->paper))
                                        <span class="badge badge-pill badge-warning"><i class="fas fa-award"></i> Selesai</span>
                                    @endif
                                </li>
                                <li>Unggah Bukti Pembayaran
                                    @if(!empty($user->transaction))
                                        <span class="badge badge-pill badge-warning"><i class="fas fa-award"></i> Selesai</span>
                                    @endif
                                </li>
                            </ol>
                        </div>
                        <hr>
                        @if(!empty($user->ktm && $user->paper && $user->transaction))
                        <form method="post" action="{{ route('finalizing_paper') }}" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group form-check">
                            <input name="agreement" type="checkbox" class="form-check-input" id="agreement-finalization">
                            <label class="form-check-label" for="agreement-finalization">Saya telah melakukan seluruh tahap pendaftaran dan sepenuhnya bertanggungjawab terhadap data yang telah saya isikan.</label>

                             @error('agreement')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                             @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-luana btn-danger btn-lg my-3" role="button" style="background-image: url('assets/img/particle/button.png');">Finalisasi Data</button>
                        </div>
                        </form>
                        @else
                            <span class="text-bold"><i class="fas fa-info-circle mr-1"></i> <strong>Tombol Finalisasi akan muncul setelah semua tahap pendaftaran online ini telah diselesaikan.</strong></span>
                        @endif