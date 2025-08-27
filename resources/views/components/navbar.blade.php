<div class="flex shadow-lg sticky top-0 bg-white z-[500] justify-between items-center p-5">
    <div class="flex gap-3 justify-center items-center ">
        <a href="/dashboard">
            <img src="https://www.wedoanydesign.com/wp-content/uploads/2022/05/web-design.png" width="50px" alt="">
        </a>
        <h3 class="font-bold text-xl">LMS</h3>
    </div>
    <h1 class="text-2xl font-bold text-center">
    @auth
        @if(auth()->user()->role === 'admin')
            Admin Dashboard
        @elseif(auth()->user()->role === 'teacher')
            Teacher Dashboard
        @elseif(auth()->user()->role === 'student')
            Student Dashboard
        @else
            Dashboard
        @endif
    @endauth
</h1>
    <div class="flex gap-1 justify-center items-center ">
        @if (auth()->user()->image)
            <img src="{{ asset('storage/' . auth()->user()->image) }}" class="h-[40px] w-[40px] border border-purple-500 rounded-full flex justify-center items-center shadow-lg" alt="">
        @else
            <i class="bi bi-person h-[40px] w-[40px] border border-purple-500 rounded-full flex justify-center items-center shadow-lg"></i>
        @endif
        <h6 class="text-purple-500 font-semibold capitalize">{{ Auth::user()->name }}</h6>
    </div>

</div>

<div class="flex gap-2 container mx-auto p-2 shadow-xl justify-end items-center">
    <h4 class=" text-purple-500 ">Batches</h4>
    <select name="batch" id="batch" class="border border-purple-500 rounded-md p-1">
        <option value="" disabled selected >View Batches</option>
    </select>
</div>


<script>
$.ajax({
    // url: '/admin/get-my-batches',
    url: '/teacher/get-my-batches',
    method: 'GET',
    data:{},
    success: function(response) {
        // Clear existing options
        $('#batch').empty();
        $('#batch').append('<option value="" disabled selected>View Batches</option>');

        // Populate the dropdown with batches
        response.forEach(function(batch) {
            $('#batch').append('<option value="' + batch.id + '">' + batch.batch_name + '</option>');
        });
    },
    // xhrFields: { withCredentials: true }
});

</script>