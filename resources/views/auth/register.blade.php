<layout>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="{{ asset('login_page/assets/css/main.css') }}" rel="stylesheet"> <!-- CSS kustom jika ada -->
    </head>

    <div class="wrapper">
        <div class="logo">
            <img src="{{ asset('login_page/assets/img/logo.png') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            KosBanda Sign Up
        </div>

        <form method="POST" action="{{ route('register') }}" class="p-3 mt-3">
            @csrf

            <!-- Nama -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Alamat Email -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="far fa-envelope"></span>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Kata Sandi -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="fas fa-key"></span>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Konfirmasi Kata Sandi -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="fas fa-key"></span>
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="btn ms-3">
                    {{ __('Sign Up') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('iLanding/assets/js/main.js') }}"></script> <!-- JS kustom jika ada -->
</layout>