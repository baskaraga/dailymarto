<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .login-illustration {
             background: linear-gradient(135deg, #f56565 0%, #c53030 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 login-illustration items-center justify-center p-12">
            <div class="text-center">
                <!-- Shopping Cart Illustration -->
                <img src="{{ asset('images/Vector 1.png') }}" alt="Vector 1.png" class="mx-auto max-w-full h-auto">
                <h2 class="text-white text-3xl font-bold mb-4">Welcome to Daily Mart</h2>
                <p class="text-white/80 text-lg">Manage your minimarket with ease and efficiency</p>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-15">
                         <h1 class="text-2xl font-bold text-gray-900 mr-12">Daily Mart</h1>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">LOGIN</h2>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
    @csrf

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
            {{ __('Email') }}
        </label>
        <input 
            id="email"
            type="email" 
            name="email"
            value="{{ old('email') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('email') border-red-500 @enderror"
            placeholder="Masukkan email"
            required 
            autofocus 
            autocomplete="username"
        />
        @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
            {{ __('Password') }}
        </label>
        <input 
            id="password"
            type="password" 
            name="password"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('password') border-red-500 @enderror"
            placeholder="Masukkan password"
            required 
            autocomplete="current-password"
        />
        @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Remember Me and Forgot Password -->
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <input 
                id="remember_me"
                type="checkbox" 
                name="remember"
                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded"
            />
            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                {{ __('Remember me') }}
            </label>
        </div>

        @if (Route::has('password.request'))
            <a class="text-sm text-red-600 hover:text-red-700 font-medium" href="{{ route('password.request') }}">
                {{ __('Lupa Password ?') }}
            </a>
        @endif
    </div>
    
    <!-- Submit Button -->
    <button 
        type="submit" 
        class="w-full bg-red-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-red-700 transition-colors focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
    >
        {{ __('Login') }}
    </button>
</form>


                
                <!-- Register Link (Optional) -->
                @if (Route::has('register'))
                <p class="text-center mt-6 text-sm text-gray-600">
                    Belum mempunyai akun ? 
                    <a href="{{ route('register') }}" class="text-red-600 font-semibold hover:text-red-700">Register</a>
                </p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
