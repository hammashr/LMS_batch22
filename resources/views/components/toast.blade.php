@if(session('message'))
    @php
        $type = session('type') ?? 'success';
        $color = $type === 'success' ? 'text-green-400' : 'text-red-400';
        $iconColor = $type === 'success' ? 'text-green-300' : 'text-red-300';
    @endphp
    <div id="toast-message"
         class="absolute top-5 left-1/2 -translate-x-1/2 z-[9999] flex items-center justify-center pointer-events-none w-auto">
        <div class="pointer-events-auto flex items-center gap-3 bg-gradient-to-r from-purple-600 to-purple-400 text-white px-8 py-5 rounded-xl shadow-2xl animate-slide-in">
            <svg class="w-7 h-7 {{ $iconColor }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-opacity="0.2" fill="currentColor" fill-opacity="0.1"/>
                @if($type === 'success')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4" />
                @else
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6M9 9l6 6" />
                @endif
            </svg>
            <span class="font-semibold {{ $color }}">{{ session('message') }}</span>
            <button onclick="this.closest('#toast-message').style.display='none'" class="ml-4 text-white hover:text-gray-200 text-2xl leading-none">&times;</button>
        </div>
    </div>
    <style>
        .animate-slide-in {
            animation: slide-in 0.5s cubic-bezier(.4,2,.6,1) both;
        }
        @keyframes slide-in {
            from { opacity: 0; transform: translateY(-50px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
    <script>
        setTimeout(function() {
            var toast = document.getElementById('toast-message');
            if (toast) toast.style.display = 'none';
        }, 3000);
    </script>
@endif