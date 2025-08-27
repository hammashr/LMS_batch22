<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LMS</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .animate-tilt {
            animation: tilt 3s infinite linear alternate;
        }
        @keyframes tilt {
            0% { transform: rotateY(-8deg) rotateX(2deg) scale(1);}
            100% { transform: rotateY(8deg) rotateX(-2deg) scale(1.01);}
        }
        .animate-bounce-slow {
            animation: bounce-slow 2.5s infinite alternate;
        }
        @keyframes bounce-slow {
            0% { transform: translateY(0);}
            100% { transform: translateY(-12px);}
        }
        .animate-blob1 {
            animation: blob1 12s infinite ease-in-out alternate;
        }
        @keyframes blob1 {
            0% { transform: scale(1) translateY(0) translateX(0);}
            100% { transform: scale(1.2) translateY(40px) translateX(60px);}
        }
        .animate-blob2 {
            animation: blob2 10s infinite ease-in-out alternate;
        }
        @keyframes blob2 {
            0% { transform: scale(1) translateY(0) translateX(0);}
            100% { transform: scale(1.1) translateY(-30px) translateX(-40px);}
        }
        .animate-blob3 {
            animation: blob3 14s infinite ease-in-out alternate;
        }
        @keyframes blob3 {
            0% { transform: scale(1) translateY(0) translateX(0);}
            100% { transform: scale(1.15) translateY(-50px) translateX(30px);}
        }
        .glass {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(168,85,247,0.2);
            border-color: #a855f7;
        }
    </style>
</head>
<body>
    <x-toast />
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-purple-200 via-purple-100 to-pink-100">
        <!-- Animated Gradient Blobs -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-purple-400 opacity-30 rounded-full filter blur-3xl animate-blob1"></div>
        <div class="absolute top-40 -right-24 w-80 h-80 bg-pink-400 opacity-30 rounded-full filter blur-2xl animate-blob2"></div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-blue-300 opacity-20 rounded-full filter blur-3xl animate-blob3"></div>

        <!-- 3D Animated Card -->
        <div class="relative z-10 w-full max-w-md">
            <div class="glass rounded-3xl shadow-2xl p-10 flex flex-col items-center animate-tilt border border-purple-100">
                <!-- 3D LMS Icon -->
                <div class="mb-6">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-purple-500 via-pink-400 to-blue-400 flex items-center justify-center shadow-lg border-4 border-white animate-bounce-slow">
                        <svg class="w-14 h-14 text-white drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="4" y="6" width="16" height="12" rx="3" fill="currentColor" fill-opacity="0.2"/>
                            <rect x="7" y="9" width="10" height="6" rx="2" stroke="currentColor" />
                            <circle cx="12" cy="12" r="1.5" fill="currentColor" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl font-extrabold text-center text-purple-700 mb-2 tracking-wide drop-shadow">Welcome to LMS</h1>
                <p class="text-gray-500 mb-8 text-center">Sign in to access your learning dashboard</p>
                <!-- Appealing Login Form -->
                <form class="w-full space-y-6" method="POST" action="/user/login">
                    @csrf
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-1" for="email">Email</label>
                        <input name="email" id="email" type="email" placeholder="Enter your email" class="input-focus w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50 shadow-inner transition" required>
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-semibold mb-1" for="password">Password</label>
                        <input name="password" id="password" type="password" placeholder="Enter your password" class="input-focus w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50 shadow-inner transition" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="flex items-center text-gray-500 text-sm">
                            <input type="checkbox" class="accent-purple-500 mr-2">
                            Remember me
                        </label>
                        <a href="#" class="text-purple-600 font-semibold hover:underline text-sm">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold text-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                        Login
                    </button>
                </form>
                <div class="mt-8 text-gray-500 text-sm">
                    Don't have an account?
                    <a href="#" class="text-purple-600 font-semibold hover:underline">Sign up</a>
                </div>
            </div>
        </div>
    </div>