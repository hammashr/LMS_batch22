<x-admin-layout>
    <x-toast />

    <div class="mx-auto mt-10 bg-white shadow-2xl rounded-md w-[85%] p-5">
      <h2 class="text-2xl font-bold text-center mb-8 text-purple-700">Add New User</h2>
        <form action="/admin/add-user" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name"  class="font-semibold mb-1 text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter full name" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="font-semibold mb-1 text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Password -->
                <div class="flex flex-col">
                    <label for="password" class="font-semibold mb-1 text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Role -->
                <div class="flex flex-col">
                    <label for="role" class="font-semibold mb-1 text-gray-700">Role</label>
                    <select id="role" name="role" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                        <option value="">Select Role</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        {{-- <option value="admin">Admin</option> --}}
                    </select>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="gender" class="font-semibold mb-1 text-gray-700">Gender</label>
                    <select name="gender" id="gender" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="flex flex-col">
                    <label for="image" class="font-semibold mb-1 text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="number" class="font-semibold mb-1 text-gray-700">Number</label>
                    <input type="number" name="number" id="number" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('number')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- hidden fields for teacher and student  --}}

                {{-- for teacher --}}

                {{-- course assigned --}}

                <div class="flex flex-col">
                    <label for="course_assigned" class="font-semibold mb-1 text-gray-700">Course Assigned</label>
                    <select name="course_assigned" id="course_assigned" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                        <option value="">Select Course</option>
                        @foreach ($courses as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('course_assigned')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- batch assigned --}}

                <div class="flex flex-col">
                    <label for="batch_assigned" class="font-semibold mb-1 text-gray-700">Batch Assigned</label>
                    <select name="batch_assigned" id="batch_assigned" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                        <option value="">Select Batch</option>
                        
                        {{-- @foreach ($courses as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach --}}
                    </select>
                    @error('course_assigned')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>





            </div>
            <button type="submit" class="w-full mt-8 bg-purple-600 hover:bg-purple-700 text-white rounded-full py-3 text-lg font-semibold shadow-md transition">
                <i class="bi bi-person-plus mr-2"></i>Add User
            </button>
        </form>
</div>




<script>
    // $(document).ready(function() {
    //     $('#role').change(function() {
    //         var role = $(this).val();
    //         if (role === 'teacher') {
    //             $('.courses').removeClass('hidden');
    //         } else {
    //             $('.courses').addClass('hidden');
    //         }
    //     });
    // });



    $('#course_assigned').on('change', function() {
        let course_id = $(this).val();
        // Make an AJAX request to get the batches for the selected course
        $.ajax({
            url: '/admin/get-relevant-batches/',
            method: 'GET',
            data: {
                 course_id
            },
        success: function(response) {
    let options = '<option value="">Select Batch</option>';
    if (Array.isArray(response) && response.length > 0) {
        options += response.map(function(item) {
            return `<option value="${item.id}">Batch ${item.batch_name}</option>`;
        }).join('');
    }
    $('#batch_assigned').html(options);
}
        });
    });
</script>






</x-admin-layout>