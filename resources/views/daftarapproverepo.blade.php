<x-landing-layout>
    <div class="container mx-auto">
        <div class="px-4">
            <div class="px-4 pt-10 text-center items-center mb-8">
                <p class="font-bold text-black text-xl md:text-2xl">List Approve</p>
            </div>


            <div class="w-full px-4 mb-10 shadow-lg bg-white rounded-2xl">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                    <table
                        class="table table-bordered w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>

                            @foreach ($daftarapproverepo as $da)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 text-blue-400 font-bold text-md text-wrap whitespace-nowrap dark:text-white">
                                        {{ $da->title }}
                                        <div class="flex">
                                            <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                                <i class="fa-solid fa-user"></i>
                                                {{ $da->student_name }} [{{ $da->student }}]
                                            </h2>
                                            <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                                <i class="fa-solid fa-user-tie"></i>
                                                {{ $da->userlec->name }}
                                            </h2>
                                            <h2 class="text-red-600 font-bold max-w-md text-sm">
                                                {{ date('Y', strtotime($da->created_at)) }}
                                            </h2>
                                        </div>
                                    </th>

                                    <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                        <a
                                            class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas
                                            Akhir</a>
                                        <a href="{{ route('daftarapproverepo.edit', $da->series) }}"
                                            class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        @include('components.footer')
    </div>
</x-landing-layout>
