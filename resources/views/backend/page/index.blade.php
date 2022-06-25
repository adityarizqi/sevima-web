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
                                    {{ $item->created_at->format('d/m/Y') }}
                                </td>
                                <td>
                                    <a href="{{ route('backend.page.action', ['action' => 'update', 'id' => $item->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    {{-- <a href="{{ route('backend.page.action', $item->id) }}" class="btn btn-sm btn-danger">Hapus</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
