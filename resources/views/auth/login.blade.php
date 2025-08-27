<!-- filepath: resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-400 via-pink-200 to-blue-200 min-h-screen flex items-center justify-center">
    <div class="bg-white/95 rounded-3xl shadow-2xl p-10 w-full max-w-md flex flex-col items-center relative">
        {{-- <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full p-3 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zm0 2c-2.67 0-8 1.337-8 4v2a1 1 0 001 1h14a1 1 0 001-1v-2c0-2.663-5.33-4-8-4z" />
            </svg>
        </div> --}}
        <h1 class="text-3xl font-extrabold text-purple-700 mb-2 mt-6 tracking-tight">Welcome Back!</h1>
        <p class="text-gray-500 mb-6 text-center">Sign in to your LMS account</p>
        <form method="POST" action="{{ route('user-login-post') }}" class="w-full space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="email">Email</label>
                <input id="email" name="email" type="email" required autofocus
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50 shadow-inner transition placeholder-gray-400"
                    placeholder="you@email.com">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1" for="password">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50 shadow-inner transition placeholder-gray-400"
                    placeholder="Your password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-600">Remember me</label>
                </div>
                <a href="#" class="text-sm text-purple-600 hover:underline">Forgot password?</a>
            </div>
            <button type="submit"
                class="w-full py-3 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold text-lg shadow-lg hover:scale-105 transition-all duration-300">
                Sign In
            </button>
        </form>
        <p class="mt-6 text-gray-500 text-sm">Don't have an account?
            <a href="#" class="text-purple-600 hover:underline font-semibold">Contact Admin</a>
        </p>
    </div>
</body>
</html>