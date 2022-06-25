@extends('backend.layouts.app')

@section('content')
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <p class="text-center">
            <a href="{{ route('home') }}" class="d-flex align-items-center justify-content-center">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                Back to beranda
            </a>
        </p>
        <div class="row justify-content-center form-bg-image" data-background-lg="{{ url('assets/backend/assets/img/illustrations/signin.svg') }}">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">Buat akun baru </h1>
                    </div>
                    <form action="" method="POST" class="mt-4" id="form">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email">Nama</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Fulan" name="name" id="name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                </span>
                                <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" placeholder="Email" value="{{ $errors->has('email') ? old('email') : '' }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="confirm_password">Konfirmasi Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input type="password" placeholder="Konfirmasi Password" class="form-control" id="confirm_password" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms">
                                    <label class="form-check-label fw-normal mb-0" for="terms">
                                        Saya setuju dengan <a href="#" class="fw-bold">syarat dan ketentuan</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" id="submit_btn" class="btn btn-gray-800">Daftar</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="fw-bold">Masuk</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('#submit_btn').click(function(e){
        e.preventDefault();
        if(!$('#terms').is(':checked')){
            Swal.fire({
                title: 'Informasi',
                text: "Anda harus menyetujui syarat dan ketentuan",
                icon: 'info',
                confirmButtonText: 'Baik'
            })
            return false;
        }

        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();
        if(password != confirm_password){
            Swal.fire({
                title: 'Informasi',
                text: "Password dan konfirmasi password harus sama",
                icon: 'info',
                confirmButtonText: 'Baik'
            })
            return false;
        }
        $('form').submit();
    });
</script>
@endsection
