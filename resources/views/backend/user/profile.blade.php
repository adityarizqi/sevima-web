@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Informasi Umum</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 mb-3">
                        <div><label for="name">Nama</label> <input class="form-control" id="name" type="text"
                                name="name" value="{{ $user->name }}" placeholder="eg. Fulan" required></div>
                    </div>
                    <div class="col-12 mb-3">
                        <div><label for="image">Gambar</label>
                            <input class="form-control" id="image" type="file" name="image" accept="image/png, image/jpeg, image/jpg" @if($user->image == null) required @endif>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3"><label for="birthday">Tanggal Lahir</label>
                            <div class="input-group"><span class="input-group-text"><svg class="icon icon-xs"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg> </span><input data-datepicker="" id="birth_day" class="form-control"
                                    name="birth_day" type="text" placeholder="mm/dd/yyyy"
                                    value="{{ $data != null ? $data->birth_day : null }}" required></div>
                        </div>
                        <div class="col-md-6 mb-3"><label for="gender">Jenis Kelamin</label> <select class="form-select mb-0"
                                id="gender" name="gender" required>
                                <option disabled @if ($data == null) selected @endif>Pilih</option>
                                <option value="Perempuan" @if ($data != null && $data->gender == 'Perempuan') selected @endif>Perempuan
                                </option>
                                <option value="Laki-Laki" @if ($data != null && $data->gender == 'Laki-Laki') selected @endif>Laki-Laki
                                </option>
                            </select></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group"><label for="email">Email</label> <input class="form-control"
                                    id="email" type="email"  value="{{ $user->email }}"
                                    placeholder="alamat@email.com" readonly></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group"><label for="phone_number">Nomor Telepon</label> <input class="form-control"
                                    id="phone_number" name="phone_number" type="text" value="{{ $data != null ? $data->phone_number : null }}"
                                    placeholder="+62 112 3334 5556" required></div>
                        </div>
                    </div>
                    @if (auth()->user()->type == 'author')
                    <div class="col-12 mb-3">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" placeholder="eg. Saya suka membuat orang terkesan" id="textarea" rows="4" required>{{ $data != null ? $data->bio : '' }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group"><label for="email">Status</label> <select class="form-select mb-0"
                                id="is_available" name="is_available" required>
                                <option disabled @if ($data == null) selected @endif>Pilih</option>
                                <option value="Tersedia" @if ($data != null && $data->is_available == 'Tersedia') selected @endif>Tersedia
                                </option>
                                <option value="Tidak Tersedia" @if ($data != null && $data->is_available == 'Tidak Tersedia') selected @endif>Tidak Tersedia
                                </option>
                                <option value="Sibuk" @if ($data != null && $data->is_available == 'Sibuk') selected @endif>Sibuk
                                </option>
                            </select></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group"><label for="phone_number">Waktu Aktif</label> <input class="form-control"
                                    id="daily_active_clock" name="daily_active_clock" type="text" value="{{ $data != null ? $data->daily_active_clock : null }}"
                                    placeholder="07:00 - 10:00" required></div>
                        </div>
                    </div>
                    @endif
                    @if (auth()->user()->type == 'user')
                    <div class="col-12 mb-3">
                        <div><label for="name">Nama Sekolah / Lembaga / Instansi</label> <input class="form-control" id="school_or_agency" type="text"
                                name="school_or_agency" value="{{ $data != null ? $data->school_or_agency : null}}" placeholder="eg. SMA Indonesia Jaya" required></div>
                    </div>
                    @elseif (auth()->user()->type == 'author')
                    <div class="col-12 mb-3">
                        <div><label for="subject">Mata Pelajaran</label> <input class="form-control" id="subject" type="text"
                                name="subject" value="{{ $user->subject }}" placeholder="eg. Bahasa Indonesia" required></div>
                    </div>
                    <div class="col-12 mb-3">
                        <div><label for="price">Harga Penawaran</label> <input class="form-control" id="price" type="number"
                                name="price" value="{{ $user->price }}" placeholder="eg. 40.000 / Jam" required></div>
                    </div>
                    @endif
                    <h2 class="h5 my-4">Lokasi</h2>
                    <div class="col-12 mb-3">
                        <div><label for="address">Alamat</label> <input class="form-control" id="address" type="text"
                                name="address" value="{{ $data != null ? $data->address : null }}" placeholder="eg. Perumahan jakarta barat"
                                required></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group"><label for="city">Kota</label> <input class="form-control"
                                    id="city" name="city" type="text" value="{{ $data != null ? $data->city : '' }}" placeholder="Kota" required></div>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <div class="form-group"><label for="province">Provinsi</label> <input class="form-control"
                                    id="province" name="province" type="text" value="{{ $data != null ? $data->province : '' }}" placeholder="Provinsi" required></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label for="zip">Kode POS</label> <input class="form-control"
                                    id="zip" type="text" name="zip" value="{{ $data != null ? $data->zip : '' }}" placeholder="ZIP" required></div>
                        </div>
                    </div>
                    <div class="mt-3 text-end"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button></div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg">
                        </div>
                        <div class="card-body pb-5"><img src="@if ($user->image != null)
                            {{ url("$user->image") }}
                        @else
                        {{ url('assets/backend/assets/img/team/profile-picture-3.jpg') }}
                        @endif"
                                class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{ $user->name }}</h4>
                            <h5 class="fw-normal">{{ $user->type }}</h5>
                            @if ($data != null)
                            <p class="text-gray mb-4">{{ $data->city }}, {{ $data->province }} {{ $data->zip }}</p>
                            @endif
                            <small>
                                <span class="text-muted">Bergabung pada {{ $user->created_at->format('m-d-Y') }}</span>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card card-body border-0 shadow mb-4 mb-xl-0">
                        <h2 class="h5 mb-4">Pengaturan Notifikasi</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                <div>
                                    <h3 class="h6 mb-1">Tawaran dan Promo</h3>
                                    <p class="small pe-4">Dapatkan notifikasi ketika kami memberikan tawaran dan promo terbaru</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                            id="user-notification-1"> <label class="form-check-label"
                                            for="user-notification-1"></label></div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                <div>
                                    <h3 class="h6 mb-1">Aktifitas akun</h3>
                                    <p class="small pe-4">Dapatkan pemberitahuan penting tentang Anda atau aktivitas yang Anda lewatkan
                                    </p>
                                </div>
                                <div>
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                            id="user-notification-2" checked="checked"> <label class="form-check-label"
                                            for="user-notification-2"></label></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
