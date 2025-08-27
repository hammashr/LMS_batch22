<ul class="unstyled flex flex-col gap-4 p-2">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-500 text-white items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
        Dashboard
    </li>
    <li class="flex assignment-dropdown gap-2 p-3 relative rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Courses
        <ul class="assignment-dropdown-menu unstyled z-[50] bg-white hidden top-12 left-0 py-4 px-0 w-max shadow-xl absolute rounded-md border border-gray-200">
            <a href="/admin/add-course">
                <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                Add Course
                </li>
            </a>
            
            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                View Course
            </li>
        </ul>
    </li>
    <li class="flex assignment-dropdown gap-2 p-3 relative rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        User
        <ul class="assignment-dropdown-menu unstyled z-[50] bg-white hidden top-12 left-0 py-4 px-0 w-max shadow-xl absolute rounded-md border border-gray-200">
            <a href="/admin/add-user">
                            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                Add User
             </li>  
            </a>

            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                View Users
            </li>
        </ul>
    </li>
    <li class="flex assignment-dropdown gap-2 p-3 relative rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Batches
        <ul class="assignment-dropdown-menu unstyled z-[50] bg-white hidden top-12 left-0 py-4 px-0 w-max shadow-xl absolute rounded-md border border-gray-200">
            <a href="/admin/add-batches">
                            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                Add Batch
              </li>
            </a>
            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                View Batch
            </li>
            <li class="flex assignment-list hover:bg-gray-200 gap-2 p-2 rounded-md cursor-pointer items-center font-semibold">
                <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="">
                Assign Batch
            </li>
        </ul>
    </li>
    <form action="/logout" method="POST" class="m-0">
        @csrf
        <button type="submit" class="w-full text-left">
            <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold list-none">
                <img src="https://static.vecteezy.com/system/resources/previews/000/437/014/original/logout-vector-icon.jpg" width="30px" alt="">
                Logout
            </li>
        </button>
    </form>
</ul>

<script>
    // Dropdown functionality
    document.querySelectorAll('.assignment-dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('click', function(e) {
            // Close all dropdowns first
            document.querySelectorAll('.assignment-dropdown-menu').forEach(function(menu) {
                if(menu !== dropdown.querySelector('.assignment-dropdown-menu')) {
                    menu.classList.add('hidden');
                }
            });
            // Toggle current dropdown
            const submenu = dropdown.querySelector('.assignment-dropdown-menu');
            submenu.classList.toggle('hidden');
            e.stopPropagation();
        });
    });

    // Close dropdowns when clicking outside
    window.addEventListener('click', function() {
        document.querySelectorAll('.assignment-dropdown-menu').forEach(function(menu) {
            menu.classList.add('hidden');
        });
    });
</script>