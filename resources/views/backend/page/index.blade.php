@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">No</th>
                            <th class="border-0">Judul</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Slug</th>
                            <th class="border-0">Dibuat pada</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    {{ $item->slug }}
                                </td>
                                <td>
                                    {{ $item->created_at->format('d/m/Y') }}<br> <span class="text-muted text-sm">({{ $item->created_at->diffForHumans() }})</span>
                                </td>
                                <form id="delete_form" method="POST"
                                    action="{{ route('backend.page.action', ['action' => 'update', 'id' => $item->id]) }}">
                                    @csrf <input type="hidden" name="method" value="delete"></form>
                                @if (auth()->user()->type == 'author')
                                    <td>
                                        <a
                                            href="{{ route('backend.page.action', ['action' => 'update', 'id' => $item->id]) }}">
                                            <svg class="icon icon-xs text-primary ms-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="javascript::void(0)" onclick="$('#delete_form').submit()">
                                            <svg class="icon icon-xs text-danger ms-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                @else
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
                                        <a href="javascript::void(0)" onclick="$('#delete_form').submit()">
                                            <svg class="icon icon-xs text-danger ms-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
