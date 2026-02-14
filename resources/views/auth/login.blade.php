<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Login - Automation Report</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-6 sm:p-8">

        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Automation Report
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Sistem Pelaporan Internal Perusahaan
            </p>
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input type="password" name="password" required
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember -->
            <div class="flex items-center">
                <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 rounded border-gray-300">
                <span class="ml-2 text-sm text-gray-600">
                    Remember me
                </span>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2.5 rounded-lg hover:bg-blue-700 transition text-base font-medium">
                Login
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-gray-400">
            © {{ date('Y') }} PT Cakra Teknika Solusi
        </div>

    </div>

</body>

</html>
