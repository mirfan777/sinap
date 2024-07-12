<x-app-layout>
    <!-- hero slide -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-72 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{asset('images/c1.png')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/c1.png')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/c3.png')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>

        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
    <!-- progress -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">
        <h1 class="font-bold text-xl my-2">Pelatihan yang diambil</h1>
        <div class="flex gap-20 lg:flex-nowrap flex-wrap">
            <div><img src="{{asset('images/c6.png')}}" class="w-full lg:w-[500px] h-56 object-cover" alt="..."></div>
            <div class="flex flex-col gap-5 w-full">
                <div class="font-bold">Course Javascript</div>
                <div>
                    <div class="flex justify-between">
                        <p>Progres</p>
                        <p>70%</p>
                    </div>
                    <progress class="progress w-full" value="70" max="100"></progress>
                </div>
                <div class="">Pelajari dasar-dasar pemrograman dengan JavaScript, bahasa yang digunakan oleh lebih dari 97% situs web di dunia! Kursus ini dirancang untuk pemula yang ingin memahami cara kerja JavaScript dan bagaimana menggunakannya untuk membuat halaman web interaktif. </div>
            </div>
        </div>
    </div>
    

    <!-- training gallery -->
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
