{{-- filepath: c:\xampp\htdocs\lms\resources\views\teachers\attendance.blade.php --}}
<x-teacher-layout>
    <div>
        <label for="batch">Select Batch:</label>
        <select id="batch-select" class="border p-2 rounded">
            <option value="">-- Select Batch --</option>
            @foreach($batches as $batch)
                <option value="{{ $batch->id }}">{{ $batch->batch_name }}</option>
            @endforeach
        </select>

        <div id="students-table-container" class="mt-4"></div>
    </div>

    <script>
    document.getElementById('batch-select').addEventListener('change', function() {
        let batchId = this.value;
        let container = document.getElementById('students-table-container');
        container.innerHTML = '';
        if(batchId) {
            fetch("{{ url('teacher/batch-students') }}/" + batchId)
                .then(response => response.json())
                .then(students => {
                    console.log(students);
                    if(students.length > 0) {
                        let table = `<table class="border w-full">
                            <thead>
                                <tr>
                                    <th class="border px-2">#</th>
                                    <th class="border px-2">Student Name</th>
                                    <th class="border px-2">Attendance</th>
                                </tr>
                            </thead>
                            <tbody>`;
                        students.forEach((student, i) => {
                            table += `<tr>
                                <td class="border px-2">${i+1}</td>
                                <td class="border px-2">${student.name}</td>
                                <td class="border px-2"><input type="checkbox" name="attendance[${student.id}]"></td>
                            </tr>`;
                        });
                        table += `</tbody></table>`;
                        container.innerHTML = table;
                    } else {
                        container.innerHTML = '<p>No students found for this batch.</p>';
                    }
                });
        }
    });
</script>
</x-teacher-layout>