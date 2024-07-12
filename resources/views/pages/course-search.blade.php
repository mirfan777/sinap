<x-app-layout>
    <!-- search bar -->
    <section class="max-w-full mx-auto mt-10 lg:px-16 px-2 ">
        <div class="w-full flex flex-col items-center justify-center gap-5">
            <h1 class="text-2xl">Pencarian Kursus dan Pelatihan</h1>
            <div class="join w-full flex justify-center">
                <div class="w-full lg:w-[40%]">
                  <div class="">
                    <input class="input input-bordered join-item w-full" placeholder="Search" />
                  </div>
                </div>
                <select class="select select-bordered join-item ">
                  <option disabled selected>Filter</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
                <div class="indicator">
                  <button class="btn join-item">Search</button>
                </div>
              </div>
        </div>   
    </section>
    
    <!-- jobs -->
    <section class="max-w-full mx-auto mt-10 lg:px-16 px-2 ">
        <div class="w-full flex flex-col items-center justify-center gap-5">
            <div class="flex items-center justify-between w-full xl:w-1/2">
                <div class="flex flex-col">
                    <div class="text-2xl font-bold group hover:text-blue-400"><a href="/course-detail">Digital Marketing</a></div>
                    <div class="">Mr.Mentor 1</div>
                    <div class="">Video Conference</div>
                </div>
                <div>
                    <img src="{{asset('images/c5.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
            <div class="flex items-center justify-between w-full xl:w-1/2">
                <div class="flex flex-col">
                    <div class="text-2xl font-bold">Javascript</div>
                    <div>Mr.Mentor 2 </div>
                    <div>Video Conference</div>
                </div>
                <div>
                    <img src="{{asset('images/c6.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
            <div class="flex items-center justify-between w-full xl:w-1/2">
                <div class="flex flex-col">
                    <div class="text-2xl font-bold">Penjahit</div>
                    <div>Mr.Mentor 3 </div>
                    <div>Offline</div>
                </div>
                <div>
                    <img src="{{asset('images/c3.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
        </div>
    </section>
</x-app-layout>