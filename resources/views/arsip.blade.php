<x-landing-layout>
    <div class="container mx-auto px-10 md:flex flex-wrap gap-6 justify-evenly text-right my-10">
        @forelse ($arsip as $r)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-lg whitespace-nowrap dark:text-white">
                <div class="group relative">
                    <div
                        class="group-hover:opacity-100 opacity-0 transition-all ease-in-out duration-500 absolute justify-center w-full -bottom-5 md:bottom-4 flex">
                        <a href="https://opac.politekniklp3i-tasikmalaya.ac.id:8444/download-arsip?file_name={{ $r->file_name }}"
                            class="hover:bg-[#ECAE30] transition-all ease-in-out duration-500 font-semibold shadow-2xl shadow-primary px-7 py-3 rounded-full bg-primary text-white">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                    <div
                        class="rounded-3xl shadow-lg bg-white  group-hover:border-2 transition-all ease-in-out duration-500 border-[#ECAE30] overflow-hidden mb-10 lg:w-[600px]">
                        <div class="flex px-4 py-4 items-center">
                            <a href="https://opac.politekniklp3i-tasikmalaya.ac.id:8444/download-arsip?file_name={{ $r->file_name }}" class="text-slate-600">
                                <i class="fa-solid fa-file-pdf fa-2x"></i>
                            </a>
                            <div class="text-center md:ml-[175px] md:text-right">
                                <div class="font-bold text-lg px-4">
                                    <p>{{$r->title}}</p>
                                </div>
                                <div class="ml-[50px] flex font-light text-xs md:ml-[140px]">
                                    <p>{{date('d/m/y', strtotime($r->created_at))}} </p>
                                    <p class=" px-4">Nindy - pustakawan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
    @empty
        {{-- <p class="font-bold p-5">Data Tidak Ditemukan....</p> --}}
        <div class="flex flex-row justify-center">
            <lottie-player src="{{ asset('animation/empty.json') }}"
                background="transparent" speed="1"
                style="width: 300px; height: 350px;"loop autoplay></lottie-player>
        </div>
    @endforelse

    </div>
    <div class="w-full absolute bottom-0">
        @include('components.footer')
    </div>
</x-landing-layout>


<script src="{{ asset('js/lottie-player.js') }}"></script>
