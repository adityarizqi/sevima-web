@extends('backend.layouts.app')

@section('content')

<div class="task-wrapper border bg-white shadow border-0 rounded">
    @foreach ($data as $item)
    @php
        $detail = json_decode($item->details);
    @endphp
    <div class="card hover-state border-bottom rounded-0 py-3">
        <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
            <div class="col-1 text-left text-sm-center mb-2 mb-sm-0">
                <img src="{{ url($item->image) }}" alt="">
            </div>
            <div class="col-11 col-lg-8 px-0 mb-4 ps-3 mb-md-0">
                <div class="mb-2">
                    <h3 class="h5">{{ $item->name }}</h3>
                    <div class="d-block d-sm-flex">
                        <div>
                            <h4 class="h6 fw-normal text-gray d-flex align-items-center mb-3 mb-sm-0"><svg
                                    class="icon icon-xxs text-gray-500 me-2" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg> {{ $detail->daily_active_clock }}</h4>
                        </div>
                        <div class="ms-sm-3"><span class="badge super-badge @if ($detail->is_available == 'Tidak Tersedia')
                            bg-danger
                        @elseif($detail->is_available == 'Tersedia')
                            bg-success
                        @else
                        bg-warning
                        @endif">{{ $detail->is_available }}</span></div>
                    </div>
                    <small><span class="text-muted">Mata Pelajaran: {{ $detail->subject }} | Penawaran: {{ $detail->price }}</span></small>
                </div>
                <div><a href="./single-message.html" class="fw-bold text-dark"><span
                            class="fw-normal text-gray">{{$detail->bio}} - <small><span
                                class="fw-normal text-muted">{{$detail->city . ', ' . $detail->province}}</span></small></span></a></div>
            </div>
            <div
                class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                <div class="dropdown"><button
                        class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                            class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                            class="dropdown-item d-flex align-items-center" href="#"><svg
                                class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd"></path>
                            </svg> Hubungi Sekarang </a><a class="dropdown-item d-flex align-items-center" href="#"><svg
                                class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg> Lihat Detail </a></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="row p-4">
        <div class="col-7 mt-1">Showing 1 - 20 of 289</div>
        <div class="col-5">
            <div class="btn-group float-end"><a href="#" class="btn btn-gray-100"><svg class="icon icon-sm"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg> </a><a href="#" class="btn btn-gray-800"><svg class="icon icon-sm"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg></a></div>
        </div>
    </div> --}}
</div>

@endsection
