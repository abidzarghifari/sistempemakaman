<x-app-layout2>
        <div class="h-14"></div>
        <div class="h-full flex flex-col sm:justify-center items-center  sm:pt-0">
            <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="text-center">
                    <h1><strong>Pencatatan Tamu</strong></h1>
                </div>
                <form method="POST" action="{{ route('pencatatantamu') }}" class="mt-8">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-danger-button class="ms-3">
                            {{ __('Catat') }}
                        </x-danger-button>
                    </div>
                </form>        
            </div>
        </div>

</x-app-layout2>