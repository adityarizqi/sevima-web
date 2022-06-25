@extends('backend.layouts.app')

@section('content')
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3">Selamat datang!</h1>
                    <p class="mb-4">Anda harus verifikasi data diri terlebih dahulu sebelum dapat melanjutkan.</p>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="type" id="type">
                        <div class="d-grid">
                            <button type="submit" onclick="$('#type').val('author')" class="btn btn-info mb-2">Saya adalah Guru</button>
                            <button type="submit" onclick="$('#type').val('user')" class="btn btn-gray-800">Saya adalah Siswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
