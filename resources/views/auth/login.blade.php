<x-guest-layout> 
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: black; font-size: large;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 relative">
    <x-input-label for="password" :value="__('Contraseña')" style="color: black; font-size: large;" />

    <x-text-input id="password" class="block mt-1 w-full pr-10" 
        type="password"
        name="password"
        required autocomplete="current-password" />

        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
    <!-- Botón para mostrar/ocultar la contraseña -->
    <button type="button" onclick="togglePasswordVisibility()" class="btn btn-link">
        <i class="bi bi-eye-fill heading" style="font-size: 1rem; color: black;"></i>
    </button>

</div>

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-black" style="color: black; font-size: large;">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-x-small text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('No tiene cuenta?, registrese') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Iniciar Sesión') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>



    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    
    <!-- Scripts de Bootstrap, jQuery y Popper.js (opcional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


<script>
function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 14l9-5-9-5 9 5z" />';
        } else {
            passwordField.type = 'password';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 14l9-5-9-5 9 5z" />';
        }
    }
</script>
