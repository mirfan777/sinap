<x-app-layout>
    <!-- search bar -->
    <section class="max-w-full mx-auto mt-10 lg:px-16 px-2 ">
        <div class="w-full flex flex-col items-center justify-center gap-5">
            <h1 class="text-2xl">Pencerangan Lowongan Kerja</h1>
            <div class="join w-full flex justify-center">
                <div class="w-full lg:w-[40%]">
                  <div class="">
                    <input class="input input-bordered join-item w-full" placeholder="Search" />
                  </div>
                </div>
                <select class="select select-bordered join-item ">
                  <option disabled selected>Filter</option>
                  <option>Sci-fi</option>
                  <option>Drama</option>
                  <option>Action</option>
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
                    <div class="text-2xl font-bold group hover:text-blue-400"><a href="/loker-detail">Penjahit</a></div>
                    <div>PT. Jahitku Bersamamu</div>
                    <div>Jakarta Pusat</div>
                    <div>Rp 3.500.000 - Rp 4.000.000</div>
                </div>
                <div>
                    <img src="{{asset('images/c3.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
            <div class="flex items-center justify-between w-full xl:w-1/2">
                <div class="flex flex-col">
                    <div class="text-2xl font-bold">Digital Marketing</div>
                    <div>PT. Digidaw</div>
                    <div>Jakarta Barat</div>
                    <div>Rp 5.500.000 - Rp 6.000.000</div>
                </div>
                <div>
                    <img src="{{asset('images/c5.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
            <div class="flex items-center justify-between w-full xl:w-1/2">
                <div class="flex flex-col">
                    <div class="text-2xl font-bold">Bakery</div>
                    <div>PT. Roticoy</div>
                    <div>Jakarta Pusat</div>
                    <div>Rp 3.500.000 - Rp 4.000.000</div>
                </div>
                <div>
                    <img src="{{asset('images/c2.png')}}" alt="" class="w-40 h-40 rounded-xl">
                </div>
            </div>
        </div>
    </section>
</x-app-layout>