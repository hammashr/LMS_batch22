

<x-layout>

<x-navbar />
    <div class="grid grid-cols-12 gap-5 p-5 ">
        <div class="xl:col-span-2  lg:col-span-3 hidden lg:block">
        {{-- sidebar --}}
        <x-admin-sidebar />
        </div>
        <div class="xl:col-span-10 lg:col-span-9 col-span-12 h-[80vh] overflow-y-scroll">
        {{-- progress section --}}
        {{ $slot }}

        </div>
        {{-- <div class="xl:col-span-5 lg:col-span-4 col-span-12"> --}}
            {{-- average --}}
            
        {{-- </div> --}}
   </div>
</x-layout>