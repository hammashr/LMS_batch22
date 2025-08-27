<x-teacher-layout>

<div class="shadow-2xl bg-gray-100 rounded-md p-5 xl:w-[85%] mx-auto">
    <div class="flex gap-2 justify-center">
        <i class="bi bi-calendar-date text-purple-500 text-xl"></i>
        <h2 class="text-md font-semibold text-purple-500 text-xl">Upload An Assignment</h2>
    </div>
    <form action="/teacher/upload-assignment" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-3">
            <!-- Topic -->
            <div class="flex flex-col">
                <label class="font-semibold mb-1">Topic</label>
                <input value="{{ old('topic') }}" name="topic" type="text" placeholder="Enter name of the topic..." class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white" />
                @error('topic')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror


            </div>
            <!-- Max Marks -->
            <div class="flex flex-col">
                <label class="font-semibold mb-1">Max Marks</label>
                <input value="{{ old('marks') }}" name="marks" type="number" placeholder="e.g. 15" class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white" />
                @error('marks')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Batch no. -->
            <div class="flex flex-col">
                <label class="font-semibold mb-1">Batch no.</label>
                <select value="{{ old('batch') }}" name="batch" class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white">
                    <option>Select Batch</option>
                    <option>Batch 1</option>
                    <option>Batch 2</option>
                </select>
                @error('batch')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Deadline -->
            <div class="flex flex-col">
                <label class="font-semibold mb-1">Deadline</label>
                <input value="{{ old('deadline') }}" name="deadline" type="datetime-local" class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white" />
                @error('deadline')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Type -->
            <div class="flex flex-col">
                <label class="font-semibold mb-1">Type</label>
                <select value="{{ old('type') }}" name="type" class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white">
                    <option>Select type</option>
                    <option>Assignment</option>
                    <option>Test</option>
                </select>
                @error('type')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Upload File -->
            <div>
                <label for="uploadFile" class="block font-medium mb-1">Upload File</label>
                <input value="{{ old('file') }}" name="file" id="uploadFile" type="file" class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white" />

            @error('file')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>
        </div>
        <!-- Description (full width) -->
        <div class="flex flex-col mt-6">
            <label class="font-semibold mb-1">Description</label>
            <textarea value="{{ old('desc') }}" name="desc" rows="3" placeholder="Enter description of the topic..." class="rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white"></textarea>

            @error('desc')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>
        <button type="submit" class="w-full mt-8 bg-purple-600 hover:bg-purple-700 text-white rounded-full py-3 text-lg font-semibold transition">Add Task</button>
    </form>

</div>

</x-teacher-layout>