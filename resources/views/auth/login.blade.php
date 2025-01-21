<layout>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="{{ asset('login_page/assets/css/main.css') }}" rel="stylesheet"> <!-- Tambahkan CSS kustom jika ada -->
    </head>

    <div class="wrapper">
        <div class="logo">
           <img src="{{ asset('login_page/assets/img/logo.png') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            KosBanda
        </div>

        <!-- Status Sesi -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
            @csrf

            <!-- Alamat Email -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Kata Sandi -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="fas fa-key"></span>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Ingat Saya -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember Mse') }}</span>
                </label>
            </div>

            <button class="btn mt-3">
                {{ __('Login') }}
            </button>
        </form>

        <div class="text-center fs-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a> or 
            @endif
            <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('iLanding/assets/js/main.js') }}"></script> <!-- Tambahkan JS kustom jika ada -->
</layout>