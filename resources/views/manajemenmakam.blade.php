<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full p-4 space-y-4 ">
                        <div class="mb-8 text-2xl">
                            <h1><strong>Data Makam</strong></h1>
                        </div>
                        <form class="w-full flex gap-4" role="search">
                            <input class="flex-[4] rounded-md px-4 py-1" type="search" placeholder="Search" aria-label="Search">
                            <x-primary-button>{{ __('Cari') }}</x-primary-button>
                        </form>
                        <div class="w-full flex gap-4">
                            <div class="flex-[4]" ></div>
                            <p class="text-red">*Klik Nomor untuk mengupdate data</p>
                                 </div>
                                 <table class="table-auto w-full bg-red-700 rounded-md text-white">
                                    <thead>
                                        <tr class="border-b border-b-2 border-red-800">
                                            <th class="px-4 py-2">No Makam</th>
                                            <th class="px-4 py-2">Nama</th>
                                            <th class="px-4 py-2">Gelar</th>
                                            <th class="px-4 py-2">Tanggal Lahir</th>
                                            <th class="px-4 py-2">Tanggal Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                            @foreach ($makams as $makam) 
                                                <tr class="border-b border-red-800">
                                                    <td class="px-4 py-3">{{$makam->id}}</td>
                                                    <td class="px-4 py-3">{{$makam->Nama}}</td>
                                                    <td class="px-4 py-3">{{$makam->Gelar}}</td>
                                                    <td class="px-4 py-3">{{$makam->Tgl_Lahir}}</td>
                                                    <td class="px-4 py-3">{{$makam->Tgl_Meninggal}}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                    </div>
                </div>
        </div>        
    </div>
</x-app-layout>