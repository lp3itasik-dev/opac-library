<x-landing-layout>
    <div class="container mx-auto mt-12 mb-14 md:mb-0">
        <div>
            <div class="my-8 mx-auto">
                <h3 class="text-4xl text-center font-bold text-slate-800 sm:text-5xl md:text-4xl">Visi Misi</h3>
            </div>
            <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl flex lg:max-w-full lg:p-0 justify-center items-center">
                <div class="lg:p-12 lg:flex-1">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="mt-4 rounded-2xl border-white border-4 shadow-lg sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden">
                    <h2 class="mt-4 text-slate-800 text-2xl font-semibold sm:mt-8 sm:text-4xl">Visi</h2>
                    <p class="mt-2 text-slate-600 text-wrap sm:mt-4 sm:text-md">Pada tahun 2031 ditingkat Asia menjadi institusi pendidikan tinggi vokasional yang mampu menjawab tantangan di era globalisasi dalam menghasilkan sumber daya manusia yang unggul dan berkompeten pada bidang keahlian.
                    </p>
                </div>
                <div class="hidden lg:flex basis-1/3">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="object-cover w-[500px] h-72 rounded-2xl border-white border-4 shadow-lg">
                </div>
            </div>

            <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl flex lg:max-w-full lg:p-0 justify-center items-center">
                <div class="hidden lg:flex basis-1/3">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="object-cover w-[500px] h-72 rounded-2xl border-white border-4 shadow-lg">
                </div>
                <div class="lg:p-12 lg:flex-1">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="mt-4 rounded-2xl border-white border-4 shadow-lg sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden">
                    <h2 class="mt-4 text-slate-800 text-2xl font-semibold sm:mt-8 sm:text-4xl">Misi</h2>
                    <ol class="ml-5 list-outside list-decimal mt-4 text-wrap text-sm md:text-base text-gray-700 space-y-2">
                        <li>Menyelenggarakan pendidikan yang berpusat pada peserta didik, menggunakan pendekatan link and match serta mengoptimalkan pemanfaatan teknologi.</li>
                        <li>Menyelenggarakan penelitian yang bermanfaat bagi pengembangan IPTEK dan kesejatraan masyarakat.</li>
                        <li>Meningkatkan kualitas sistem penjamin mutu untuk menopang pencapaian institusi.</li>
                        <li>Menyebarluaskan artikel hasil penelitian baik melalui forum ilmia maupun jurnal nasional dan internasional.</li>
                        <li>Menyelenggarakan kegiatan pengabdian kepada masyarakat dalam rangka mengembangkan hasil penelitian yang berorientasi pada proses pemberdayaan masyarakat.</li>
                        <li>Menyelenggarakan tata pamong yang mandiri, akuntabel dan transparan yang menjamin peningkatan kualitas berkelanjutan.</li>
                        <li>Menyelenggarakan kerjasama dengan dunia usaha dan industri serta pengembangan jiwa kemandirian yang profesional dan berkarakter.</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        @include('components.footer')
    </div>    
</x-landing-layout>
