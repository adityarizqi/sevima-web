@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">No</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">ID Penarikan</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Jumlah</th>
                            <th class="border-0">Dibuat pada</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        @php
                            $user = \App\Models\User::find($item->author_id);
                        @endphp
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $item->payment_id }}</td>
                                <td>{{ $item->status }}</td>
                                <td>@currency($item->amount)</td>
                                <td>
                                    {{ $item->created_at->format('d/m/Y') }} <br> <span class="text-muted text-sm">({{ $item->created_at->diffForHumans() }})</span>
                                </td>
                                <td>
                                    <a href="">
                                        <svg class="icon icon-xs text-primary ms-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
