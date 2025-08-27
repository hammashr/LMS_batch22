<x-admin-layout>
    {{-- {{ $courses }} --}}
    <x-toast />
<div class="mx-auto mt-10 bg-white shadow-2xl rounded-md w-[85%] p-5">
    <h2 class="text-2xl font-bold text-center mb-8 text-purple-700">Add New Batch</h2>
    <form action="/admin/add-batch" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Batch Name -->
            <div class="flex flex-col">
                <label for="batch_name" class="font-semibold mb-1 text-gray-700">Batch Number</label>
                <input type="number" id="batch_name" name="batch_name" placeholder="Enter batch number" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                @error('batch_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Course Dropdown -->
                        <div class="flex flex-col">
                <label for="course" class="font-semibold mb-1 text-gray-700">Course</label>
                <select id="course" name="course" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    <option value="">Select a course</option>
                    @foreach ($courses as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        
                    @endforeach
                    
                </select>
                @error('course')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Start Date -->
            <div class="flex flex-col">
                <label for="start_date" class="font-semibold mb-1 text-gray-700">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                @error('start_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- End Date -->
            <div class="flex flex-col">
                <label for="end_date" class="font-semibold mb-1 text-gray-700">End Date</label>
                <input type="date" id="end_date" name="end_date" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                @error('end_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Capacity -->
            <div class="flex flex-col">
                <label for="capacity" class="font-semibold mb-1 text-gray-700">Capacity</label>
                <input type="number" id="capacity" name="capacity" placeholder="Enter batch capacity" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                @error('capacity')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Status Dropdown -->
            <div class="flex flex-col">
                <label for="status" class="font-semibold mb-1 text-gray-700">Status</label>
                <select id="status" name="status" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    <option value="">Select status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="teacher_assigned" class="font-semibold mb-1 text-gray-700">Teacher</label>
                <select id="teacher_assigned" name="teacher_assigned" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    <option value="">Select Teacher</option>
                    {{-- dynamically add teachers --}}

                    
                </select>
                @error('Teacher')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="w-full mt-8 bg-purple-600 hover:bg-purple-700 text-white rounded-full py-3 text-lg font-semibold shadow-md transition">
            Add Batch
        </button>
    </form>
</div>


<script>
    $.ajax({
        url:'/admin/get-teachers',
        type:'GET',
        data:{},
success: function(response) {
    var teacherSelect = $('#teacher_assigned');
    teacherSelect.empty();
    teacherSelect.append('<option value="">Select Teacher</option>');
    $.each(response, function(index, teacher){
        teacherSelect.append('<option value="'+teacher.id+'">'+teacher.name+'</option>');
    });
}
    })
</script>


</x-admin-layout>