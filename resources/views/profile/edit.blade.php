<x-app-layout>
    <!-- profile -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2 flex flex-col gap-5">
        <div class="flex items-center gap-5 ">
            <img src="{{asset('images/profile.svg')}}" alt="" class="bg-gray-300 w-20 h-20 rounded-lg">
            <div class="flex justify-between w-full">
                <div>
                    <h1 class="text-2xl font-bold">{{auth()->user()->name}}</h1>
                    <p>321172311010004</p>
                </div>
                <button class="btn" onclick="profile_update.showModal()">
                    change profile
                </button>
            </div>
        </div>
    </div>

    <!-- sertifikasi -->
    <div class="max-w-full mx-auto mt-10 lg:px-16 px-2 flex flex-col gap-5" >
        <h1 class="text-2xl font-bold">Sertifikasi</h1>
        <hr>
        <div class="flex flex-row gap-10 w-full overflow-x-auto p-2 ">
            <div class="flex gap-5">
                <div class="card bg-base-100 w-96 shadow-xl">
                    <figure class="card-body">
                        <img
                        src="{{asset('images/certificate.png')}}"
                        alt="Shoes" />
                    </figure>
                  </div>
            </div>
        </div>
    </div>

    <!-- review mentor -->
    <section class="max-w-full mx-auto mt-10 lg:px-16 px-2 flex flex-col gap-5 ">
        <h1 class="text-2xl font-bold">Review Mentor</h1>
        <hr>
        <div class="flex flex-row gap-10 w-full overflow-x-scroll">
            <div class="flex gap-5">
                <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Budi Budiawan</h2>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum ac tellus gravida pellentesque.
                    </div>
                  </div>
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Hermawan Sentyaki</h2>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum ac tellus gravida pellentesque.
                    </div>
                  </div>
            </div>
        </div>
    </section>



    <!-- status -->
    <section class="max-w-full mx-auto mt-10 lg:px-16 px-2 flex flex-col gap-5 ">
        <h1 class="text-2xl font-bold">Status Mentor</h1>
        <hr>
        <div class="flex flex-row gap-10 w-full overflow-x-scroll">
            <div class="flex gap-5">
                <div class="card bg-warning w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Android Developer</h2>
                      <p>PT. Mendevelop Software</p>
                      <h3>Status : Pending</h3>
                      Jakarta Barat
                    </div>
                  </div>
                  <div class="card bg-warning w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Software Engineer</h2>
                      <p>PT. Mendevelop Software</p>
                      <h3>Status : Pending</h3>
                      Jakarta Pusat
                    </div>
                  </div>
                  <div class="card bg-error w-96 shadow-xl">
                    <div class="card-body">
                      <h2 class="card-title">Frontend Developer</h2>
                      <p>PT. Mendevelop Software</p>
                      <h3>Status : Rejected</h3>
                      Jakarta Bandung
                    </div>
                  </div>
                  
            </div>
        </div>
    </section>

    <dialog id="profile_update" class="modal">
    <div class="modal-box">
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
    </dialog>


    
</x-app-layout>
