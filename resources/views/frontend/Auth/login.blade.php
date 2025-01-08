@extends('frontend.layout.app')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mx-auto">
                <div class="custom-block bg-white shadow-lg p-5">
                    <h4 class="text-center mb-4">Login</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="custom-form">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password anda" required>
                            <input type="checkbox" id="togglePassword" class="mt-2"> <label for="togglePassword" class="form-check-label">Tampilkan Password</label>
                        </div>

                        <div class="form-group mb-4">
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Ingat saya</label>
                                </div>
                                <a href="#" class="text-primary">Lupa password?</a>
                            </div>
                        </div>

                        <button type="submit" class="form-control">Login</button>

                        <p class="text-center mt-4">
                            Belum punya akun? <a href="{{Route('register')}}" class="text-primary">Daftar disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('change', function() {
        if (this.checked) {
            passwordInput.setAttribute('type', 'text');
        } else {
            passwordInput.setAttribute('type', 'password');
        }
    });
</script>
@endsection
