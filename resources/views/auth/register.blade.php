<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html{
            scroll-behavior: smooth
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .register-illustration {
            background: linear-gradient(135deg, #f56565 0%, #c53030 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto">
                        </div>
                        <h1 class="text-2xl font-bold text-gray-900 mr-12">Daily Mart</h1>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">REGISTER</h2>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf
                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('Nama') }}
                        </label>
                        <input 
                            id="name"
                            type="text" 
                            name="name"
                            value="{{ old('name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('name') border-red-500 @enderror"
                            placeholder="Masukkan nama lengkap"
                            required 
                            autofocus 
                            autocomplete="name"
                        />
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('Username') }}
                        </label>
                        <input 
                            id="username"
                            type="text" 
                            name="username"
                            value="{{ old('username') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('username') border-red-500 @enderror"
                            placeholder="Masukkan username"
                            required 
                            autocomplete="username"
                        />
                        @error('username')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- No Telpon -->
                    <div>
                        <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('No Telpon') }}
                        </label>
                        <input 
                            id="no_telp"
                            type="textt" 
                            name="no_telp"
                            value="{{ old('no_telp') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('no_telp') border-red-500 @enderror"
                            placeholder="Masukkan nomor telepon"
                            required 
                            autocomplete="no_telp"
                        />
                        @error('no_telp')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

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
                            placeholder="Masukkan Email"
                            required 
                            autocomplete="email"
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
                            autocomplete="new-password"
                        />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('Confirm Password') }}
                        </label>
                        <input 
                            id="password_confirmation"
                            type="password" 
                            name="password_confirmation"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors"
                            placeholder="Confirm password"
                            required 
                            autocomplete="new-password"
                        />
                    </div>
                            <div>
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
                    <button 
                        type="submit" 
                        class="w-full bg-red-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-red-700 transition-colors focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    >
                        {{ __('Register') }}
                    </button>
                </form>
                
                <!-- Login Link -->
                <p class="text-center mt-6 text-sm text-gray-600">
                    Sudah memiliki akun ?
                    <a href="{{ route('login') }}" class="text-red-600 font-semibold hover:text-red-700">Login</a>
                </p>
            </div>
        </div>

        <!-- Right Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 register-illustration items-center justify-center p-12">
            <div class="text-center">
                 <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/Vector 2.png') }}" alt="Logo" class="mx-auto">
                    </div>
                  
                
                <h2 class="text-white text-3xl font-bold mb-4">Welcome to Daily Mart</h2>
                <p class="text-white/80 text-lg">Manage your minimarket with ease and efficiency</p>
            </div>
        </div>
    </div>
</body>
</html>