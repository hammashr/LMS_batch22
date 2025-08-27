<style>
::-webkit-scrollbar{
    width:0;
}
</style>

<x-layout>
   <x-navbar />
   <x-toast />

   <div class="grid grid-cols-12 gap-5 p-5 ">
    <div class="xl:col-span-2  lg:col-span-3 hidden lg:block">
        {{-- sidebar --}}
        <x-sidebar />
    </div>
    <div class="xl:col-span-5 lg:col-span-5 col-span-12 h-[80vh] overflow-y-scroll">
        {{-- progress section --}}
        @include('teachers.partials.progress')
         @include('teachers.partials.student-list')

    </div>
    <div class="xl:col-span-5 lg:col-span-4 col-span-12">
        {{-- average --}}
         @include('teachers.partials.average-list')
    </div>
   </div>
</x-layout>
