<div class="flex flex-wrap w-full shadow-2xl p-3 justify-between items-center">
    <div class="flex gap-2 items-center">
        <img src="https://www.wedoanydesign.com/wp-content/uploads/2022/05/web-design.png" alt="Logo" width="30px"  >
        <h1 class="text-xl font-semibold ml-2">LMS</h1>
        <h5 class="text-purple-500">Batch:{{auth()->user()->batch_assigned}}</h5>
    </div>
    <div class="flex gap-3">
        <div class="flex items-center gap-2">
            <img src="https://cdn-icons-png.flaticon.com/256/16587/16587896.png" width="20px" alt="">
            <h5 class="text-sm font-semibold">19</h5>
        </div>

        <div class="flex items-center gap-2">
            <img src="https://cdn-icons-png.freepik.com/256/12249/12249705.png?semt=ais_incoming" width="20px" alt="">
            <h5 class="text-sm font-semibold">11</h5>
        </div>

        <div class="flex items-center gap-2">
            <img src="https://cdn-icons-png.flaticon.com/256/3756/3756723.png" width="20px" alt="">
            <h5 class="text-sm font-semibold">1</h5>
        </div>

    </div>
    <button class="bg-[#F0EAF6] rounded-md p-1">
        <i class="bi bi-play"></i>
        Pending
    </button>
    
</div>



<div class="shadow-2xl p-5 rounded-md my-3">
    <div class="flex flex-col sm:flex-row gap-4 sm:gap-4 my-6 justify-around items-center">
        <!-- Lessons Card -->
        <div class="flex flex-col justify-between bg-yellow-100 rounded-xl shadow-md p-5 w-full sm:w-48 min-w-[180px]">
            <div class="flex items-center gap-3 justify-between">
                <div class="bg-pink-100 rounded-full p-2">
                    <img src="https://cdn-icons-png.flaticon.com/256/7342/7342013.png" width="32" alt="Lessons">
                </div>
                <img src="https://cdn-icons-png.flaticon.com/256/10741/10741279.png" width="24" alt="Pie">
            </div>
            <div class="mt-4">
                <div class="text-2xl font-bold">3</div>
                <div class="text-gray-600 text-sm">Lessons</div>
            </div>
        </div>
        <!-- Assignments Card -->
        <div class="flex flex-col justify-between bg-pink-100 rounded-xl shadow-md p-5 w-full sm:w-48 min-w-[180px]">
            <div class="flex items-center gap-3 justify-between">
                <div class="bg-white rounded-full p-2 ">
                    <img src="https://www.petrianeditingservice.co.uk/images/paraphrase.png" width="32" alt="Assignments">
                </div>
                <img src="https://cdn-icons-png.flaticon.com/256/10741/10741279.png" width="24" alt="Pie">
            </div>
            <div class="mt-4">
                <div class="text-2xl font-bold">19</div>
                <div class="text-gray-600 text-sm">Assignments</div>
            </div>
        </div>
        <!-- Tests Card -->
        <div class="flex flex-col justify-between bg-green-100 rounded-xl shadow-md p-5 w-full sm:w-48 min-w-[180px]">
            <div class="flex items-center gap-3 justify-between">
                <div class="bg-green-200 rounded-full p-2">
                    <img src="https://cdn-icons-png.freepik.com/256/1467/1467229.png?semt=ais_hybrid" width="32" alt="Tests">
                </div>
                <img src="https://cdn-icons-png.flaticon.com/256/10741/10741279.png" width="24" alt="Pie">
            </div>
            <div class="mt-4">
                <div class="text-2xl font-bold">0</div>
                <div class="text-gray-600 text-sm">Tests</div>
            </div>
        </div>
    </div>
</div>
