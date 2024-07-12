<x-app-layout>
    <!-- thumbnail -->
    <div class="w-full h-64">
        <img src="{{asset('images/c5.png')}}" class="w-full h-64 object-cover" alt="">
    </div>

    <!-- progress -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">
        <h1 class="font-bold text-xl ">Pelatihan yang diambil</h1>
        <div class="flex gap-20 lg:flex-nowrap flex-wrap">
            <div class="flex gap-5 w-full">
                <div  ><h1 class="font-bold w-20 flex-wrap ">
                    Digital Marketing
                </h1></div>
                <div>
                    <p>12 - 17 Juli 2024</p>
                    <p class="w-[500px] text-wrap">Digital marketing adalah praktik mempromosikan produk atau layanan menggunakan media digital dan internet. Ini mencakup berbagai strategi seperti SEO (Search Engine Optimization), SEM (Search Engine Marketing), pemasaran konten, pemasaran media sosial, email marketing, dan pemasaran melalui iklan berbayar.</p>
                </div>
                <div class="w-full flex flex-col gap-5">
                    <div class="flex justify-center">
                        <button class="btn btn-primary w-1/2 ">Ikuti Pelatihan</button>
                    </div>
                    <div class="">
                        <div class="flex justify-between">
                            <p>Progres</p>
                            <p>70%</p>
                        </div>
                        <progress class="progress w-full" value="70" max="100"></progress>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>

    <!-- accrodion -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2">
        <div class="join join-vertical w-full">
            <div class="collapse collapse-arrow join-item border-base-300 border">
              <input type="radio" name="my-accordion-4" checked="checked" />
              <div class="collapse-title text-xl font-medium">Apa itu digital marketing?</div>
              <div class="collapse-content">
                <p>Pengenalan digital marketing</p>
              </div>
            </div>
            <div class="collapse collapse-arrow join-item border-base-300 border">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-xl font-medium">Apa itu SEO?</div>
              <div class="collapse-content">
                
              </div>
            </div>
            <div class="collapse collapse-arrow join-item border-base-300 border">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-xl font-medium">Apa itu SEM?</div>
              <div class="collapse-content">
                
              </div>
            </div>
          </div>
    </div>

    <!-- ulasan  -->
    <section class="max-w-full mx-auto my-10 lg:px-16 px-2 ">
        <h1 class="text-2xl font-bold">Ulasan</h1>
        <div class="flex flex-row gap-10 w-full overflow-x-auto">
            <div class="flex gap-5">
                <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Review</h2>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore voluptatibus obcaecati!
                    </div>
                  </div>
            </div>
        </div>
    </section>

    
</x-app-layout>