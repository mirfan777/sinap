<x-app-layout>
    <!-- thumbnail -->
    <div class="w-full h-64 bg-gray-800">
        <img src="{{asset('images/c3.png')}}" class="w-full h-64 object-cover" alt="">
    </div>

    <!-- progress -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">
        <h1 class="font-bold text-xl">Pekerjaan  yang diambil</h1>
        <div class="flex gap-20 lg:flex-nowrap flex-wrap">
            <div class="flex gap-5 w-full">
                <div  ><h1 class="font-bold w-20 flex-wrap ">
                    PT. Jahitku Bersamamu 
                </h1></div>
                <div>
                    <p>Jakarta Utara</p>
                    <p class="w-[500px] text-wrap">Apakah Anda memiliki keterampilan menjahit yang luar biasa dan ingin mengubahnya menjadi peluang karir yang menjanjikan? Kami mengundang Anda untuk bergabung dengan tim kami dan membantu kami menciptakan produk berkualitas tinggi yang dicintai oleh banyak orang</p>
                </div>
                <div class="w-full flex flex-col gap-5">
                    <div class="flex justify-center">
                        <button class="btn btn-primary w-1/2 ">Daftar Pekerjaan</button>
                    </div>
                    <div class="flex justify-center">
                        Rp 4.000.000 - Rp 5.000.000
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>

    <!-- accrodion -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">
        <h1>Syarat</h1>
        <ul class="list-disc ml-10">
            <li>bisa jahit</li>
            <li>bisa benerin mesin jahit</li>
        </ul>
    </div>

    <!-- recommend  -->
    <section class="max-w-full mx-auto my-10 lg:px-16 px-2">
        <h1 class="font-bold text-xl my-2">Pelatihan Terpopuler</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 place-items-center gap-10">
             <div class="card bg-base-100 lg:w-72 shadow-xl">
            <figure>
                <img class="w-72"
                src="{{asset('images/c8.png')}}"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">
                Mekanik
                </h2>
                
                <div class="card-actions justify-end">
                </div>
            </div>
            </div>
              <div class="card bg-base-100 lg:w-72 shadow-xl">
                <figure>
                    <img class="w-72"
                    src="{{asset('images/c7.png')}}"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                    Barista

                    </h2>
                    
                    <div class="card-actions justify-end">
    
                    </div>
                </div>
                </div>
              <div class="card bg-base-100 lg:w-72 shadow-xl">
                <figure>
                    <img class="w-72"
                    src="{{asset('images/c5.png')}}"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                    Digital Marketing

                    </h2>
                    
                    <div class="card-actions justify-end">
    
                    </div>
                </div>
                </div>
              <div class="card bg-base-100 lg:w-72 shadow-xl">
                <figure>
                    <img class="w-72"
                    src="{{asset('images/c3.png')}}"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                    Penjahit

                    </h2>
                    
                    <div class="card-actions justify-end">
    
                    </div>
                </div>
                </div>
            </div>

    </section>
</x-app-layout>