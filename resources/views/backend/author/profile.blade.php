@extends('backend.layouts.app')

@section('content')
@php
    $detail = json_decode($user->details);
@endphp
<div class="row justify-content-center p-2">
    <div class="card shadow border-0 p-4 p-md-5 position-relative">
        <div class="mb-6 d-flex align-items-center justify-content-center">
            <img class="image-md" src="{{ url('assets/web/images/logo.png') }}"
                alt="Rocket Logo">
        </div>
        <div class="row justify-content-between mb-4 mb-md-5">
            <div class="col-sm">
                <h5>Tentang Guru:</h5>
                <div>
                    <ul class="list-group simple-list">
                        <li class="list-group-item fw-normal">{{ $user->name }}</li>
                        <li class="list-group-item fw-normal">Keahlian: {{ $detail->subject }}</li>
                        <li class="list-group-item fw-normal">{{$detail->city . ', ' . $detail->province . ' ' . $detail->zip}}</li>
                        </li>
                        <li class="list-group-item fw-normal"><a class="fw-bold text-success" href="https://wa.me/+{{ preg_replace('/[^0-9]/', '', trim($detail->phone_number)) }}?text=Halo kak {{ $user->name }}, saya ingin bertanya terkait les kak. Saya dapat nomor kakak dari https://GuruLes.com"><span >Hubungi Sekarang</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm col-lg-4">
                <dl class="row text-sm-right">
                    <dt class="col-6"><strong>Bergabung pada:</strong></dt>
                    <dd class="col-6">{{ $user->created_at->format('d M, Y') }}</dd>
                    <dt class="col-6"><strong>Diperbarui pada:</strong></dt>
                    <dd class="col-6">{{ $user->updated_at->format('d M, Y') }}</dd>
                    <dt class="col-6"><strong>Jumlah Siswa:</strong></dt>
                    <dd class="col-6">{{ \App\Models\ARelation::where('author_id',$user->id)->count() }}</dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>Daftar Ulasan:</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-gray-200">Waktu</th>
                                <th class="border-gray-200">Dari</th>
                                <th class="border-gray-200">Ulasan</th>
                                <th class="border-gray-200">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\RRelation::where('author_id',$user->id)->limit(10)->get() as $item)
                                @php
                                    $usr = \App\Models\User::find($item->user_id);
                                @endphp
                                <tr>
                                    <td><span class="fw-normal">{{ $item->created_at->format('d M, Y') }}<br><span class="text-muted">({{ $item->created_at->diffForHumans() }})</span> </span></td>
                                    <td><span class="fw-normal">{{ $usr->name }}<br></span><span class="text-muted">({{ $usr->email }})</span></td>
                                    <td><span class="fw-normal">{{ \App\Models\Review::find($item->review_id)->content }}</span></td>
                                    <td>
                                        @for ($i = 0; $i < $item->score; $i++)
                                        <svg class="icon icon-xs text-primary ms-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                        @endfor
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5>Kursus dari {{ $user->name }}:</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-gray-200">No</th>
                                <th class="border-gray-200">Judul</th>
                                <th class="border-gray-200">Gambar</th>
                                <th class="border-gray-200">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\Course::where('author_id',$user->id)->orderBy('id','DESC')->limit(10)->get() as $item)
                                <tr>
                                    <td><span class="fw-normal">{{ $item->id }}</span></td>
                                    <td><span class="fw-normal">{{ $item->title }}</span></td>
                                    <td><span class="fw-normal"><img src="@if (str_contains($item->image, 'https://'))
                                            {{ $item->image }}
                                        @else
                                            {{ url($item->image) }}
                                        @endif" height="30px" alt=""></td>
                                    <td><span class="fw-normal">@currency($item->price)</span></td>
                                    <td>
                                        @for ($i = 0; $i < $item->score; $i++)
                                        <svg class="icon icon-xs text-primary ms-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                        @endfor
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="justify-content-between mb-4 mb-md-5 mt-5">
            <div class="col-sm">
                <h5>Informasi Lainnya:</h5>
                <div>
                    <ul class="list-group simple-list">
                        <li class="list-group-item fw-normal">Penawaran: <span class="text-success">{{ $detail->price }}</span></li>
                        <li class="list-group-item fw-normal">Waktu Aktif: {{$detail->daily_active_clock}}</li>
                        <li class="list-group-item fw-normal">{{ $user->email }}</li>
                        <li class="list-group-item fw-normal">{{$detail->bio}}</li>
                        </li>
                    </ul>
                </div>
                <small>*Guru ini telah terverifikasi oleh Admin</small>
            </div>
        </div>
    </div>
</div>

@endsection
