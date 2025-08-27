<x-admin-layout>
    <x-toast />

    <div class="mx-auto mt-10 bg-white shadow-2xl rounded-md w-[85%] p-5">
        <h2 class="text-2xl font-bold text-center mb-8 text-purple-700">Add New Course</h2>
        <form action="/admin/add-course" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Course Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-semibold mb-1 text-gray-700">Course Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter course name" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Description -->
                <div class="flex flex-col">
                    <label for="description" class="font-semibold mb-1 text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="2" placeholder="Enter course description" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required></textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Duration -->
                <div class="flex flex-col">
                    <label for="duration" class="font-semibold mb-1 text-gray-700">Duration (months)</label>
                    <input type="number" id="duration" name="duration" min="1" placeholder="e.g. 12" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                    @error('duration')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Level -->
                <div class="flex flex-col">
                    <label for="level" class="font-semibold mb-1 text-gray-700">Level</label>
                    <select id="level" name="level" class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-gray-50" required>
                        <option value="">Select a level</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <button type="submit" class="w-full mt-8 bg-purple-600 hover:bg-purple-700 text-white rounded-full py-3 text-lg font-semibold shadow-md transition">
                Add Course
            </button>
        </form>
    </div>
</x-admin-layout>