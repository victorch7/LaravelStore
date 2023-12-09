<x-guest-layout>
    <div class="">
        <form  method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" style="color: black; font-size: large;" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('Nombre')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" style="color: black; font-size: large;" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Phone
            <div class="mt-4">
                <x-input-label for="telefono" :value="__('Telefono')" style="color: black; font-size: large;" />
                <x-text-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
            </div> -->

    <!-- Password -->
    <div class="mt-4 relative">
        <x-input-label for="password" :value="__('Contraseña')" style="color: black; font-size: large;" />

        <x-text-input id="password" class="block mt-1 w-full pr-10" 
            type="password"
            name="password"
            required autocomplete="new-password" />

        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
            <!-- Botón para mostrar/ocultar la contraseña -->
            <button type="button" onclick="togglePasswordVisibility()" class="btn btn-link">
                <i class="bi bi-eye-fill text-black"></i>
            </button>
        </div>

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

<!-- Confirm Password -->
<div class="mt-4 relative">
    <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" style="color: black; font-size: large;" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10" 
        type="password"
        name="password_confirmation"
        required autocomplete="new-password" />

    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
        <!-- Botón para mostrar/ocultar la contraseña -->
        <button type="button" onclick="togglePasswordConfirmationVisibility()" class="btn btn-link">
            <i class="bi bi-eye-fill text-black"></i>
        </button>
    </div>

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-x-small text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ya estas registrado?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-primary-button>
            </div>
        </form>
    </div>
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

<script>
    function togglePasswordConfirmationVisibility() {
        const passwordConfirmationField = document.getElementById('password_confirmation');
        const eyeIconConfirmation = document.getElementById('eyeIconConfirmation');
        
        if (passwordConfirmationField.type === 'password') {
            passwordConfirmationField.type = 'text';
            eyeIconConfirmation.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 14l9-5-9-5 9 5z" />';
        } else {
            passwordConfirmationField.type = 'password';
            eyeIconConfirmation.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 14l9-5-9-5 9 5z" />';
        }
    }
</script>
