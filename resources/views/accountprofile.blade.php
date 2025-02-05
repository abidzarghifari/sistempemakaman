<x-app-layout>
      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"">
                <div class="p-14 text-black">
                <div class="mb-8 text-2xl">
                      <h1><strong>Profil</strong></h1>
                </div>
                  <div>
                    <div>
                        <dl class="divide-y divide-red-400">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                          <dt class="text-sm/6 font-medium">Full name</dt>
                          <dd class="mt-1 text-sm/6 sm:col-span-2 sm:mt-0">{{$user->name}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                          <dt class="text-sm/6 font-medium ">NIK</dt>
                          <dd class="mt-1 text-sm/6 sm:col-span-2 sm:mt-0">{{$user->nik}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                          <dt class="text-sm/6 font-medium">Email</dt>
                          <dd class="mt-1 text-sm/6 sm:col-span-2 sm:mt-0">{{$user->email}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                          <dt class="text-sm/6 font-medium">Alamat</dt>
                          <dd class="mt-1 text-sm/6 sm:col-span-2 sm:mt-0">{{$user->alamat}}</dd>
                        </div>
                        
                      </dl>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
