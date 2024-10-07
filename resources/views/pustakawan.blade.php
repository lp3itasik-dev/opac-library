    <x-landing-layout>
        <div class="container mx-auto my-20 md:my-10">
            <div class="flex flex-col items-center justify-center">
                <div
                    class=" w-60 h-60 border-2 border-white rounded-full shadow-lg mx-auto transition-all duration-300 cursor-pointer hover:rotate-6 hover:scale-105 hover:border-primary">
                    <img src="{{ asset('img/nindi.jpeg') }}" alt="" class="rounded-full w-60 h-60">
                </div>

                <div class="px-4 pt-2 text-center items-center">
                    <p class="font-bold text-black text-xl md:text-2xl mb-2">Nindicka Nurul Fadilah, S.IP</p>
                    <p class="mb-2 text-black ">Pustakawan Politeknik LP3I Kampus Tasikmalaya</p>
                </div>
            </div>
        </div>
        <div class="w-full bottom-0">
            @include('components.footer')
        </div>
    </x-landing-layout>
