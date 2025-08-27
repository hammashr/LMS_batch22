

<ul class="unstyled flex flex-col gap-4 p-2">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-500 text-white   items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
        Dashboard
    </li>
    {{-- <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
        Courses
    </li> --}}
    <li class="flex assignment-dropdown gap-2 p-3 relative rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Assignments
        <ul class="unstyled assignment-dropdown-menu bg-white hidden top-12 left-0 py-4 px-0 w-max shadow-xl absolute rounded-md border border-gray-200">
            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
        view Assignments
            </li>
            <li>
                <a href="{{ url('/teacher/upload-assignment') }}" class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                    <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                    Upload Assignments
                </a>
            </li>
            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
            <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
            All Assignments
            </li>
        </ul>
    </li>
    {{-- <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/marks.png" width="30px" alt="">
        Marks
    </li> --}}
    <a href="{{ url('/teacher/attendance') }}">
            <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/attendance.png" width="30px" alt="">
                    Attendance
            </li>
    </a>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/settings.png" width="30px" alt="">
        Settings
    </li>
    <form action="/logout" method="POST">
        @csrf
        <button>
            <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
                    <img src="https://static.vecteezy.com/system/resources/previews/000/437/014/original/logout-vector-icon.jpg" width="30px" alt="">
                    Logout
                </li>
        </button>
        
    </form>
    

</ul>





<script>
    $('.assignment-dropdown').on('click',function(){
        $('.assignment-dropdown-menu').toggle('hidden');

    })
    // $(window).on('click', function(e) {
    //     if(e.target.classList.contains('assignment-list') || e.target.classList.contains('assignment-dropdown') || 
    // e.target.classList.contains('assignment-dropdown-menu')
    // ) {
    //     }
    //     else{
    //         $('.assignment-dropdown-menu').addClass('hidden');

    //     }

    // });

</script>