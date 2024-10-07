<x-landing-layout>
    <div class="container mx-auto mt-8 mb-20">
        <div class="container mx-auto">
            <div class="px-4 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-12">View Approve</p>
            </div>
            <section id="inputrepo" class="px-4 mb-32">
                <div class="container mx-auto">
                    <div class="w-full mx-auto px-6 py-6 mb-10 shadow-md bg-white rounded-2xl border">
                        <form>
                            <div class="grid gap-6 mb-6 md:grid-cols-3">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $repositories->user->name }}" readonly>
                                </div>
                                <div>
                                    <label for="nim"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                    <input type="text" id="nim"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $repositories->student }}" readonly>
                                </div>
                                <div>
                                    <label for="nim"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prodi</label>
                                    <input type="text" id="nim"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $repositories->major }}" readonly>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="judul"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                    Repository</label>
                                <input type="text" id="judul"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ $repositories->title }}" readonly>
                            </div>

                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div class="mb-6">
                                    <label for="judul"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koleksi</label>
                                    <input type="text" id="judul"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $repositories->types->name ?? 'Tidak ada tipe' }}" readonly>
                                </div>
                                <div>
                                    <label for="namapembimbing"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Pembimbing</label>
                                    <input type="text" id="namapembimbing"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $repositories->userlec->name }}" readonly>
                                </div>
                            </div>
                            {{-- <div class="mb-6">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                            <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div> 
                        <div class="mb-6">
                            <label for="keyword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Kunci</label>
                            <input type="text" id="keyword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div>  --}}
                            <div class="mb-6">
                                <label for="keyword"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Abstrak</label>
                                <textarea type="text" id="keyword"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="" readonly>{{ $repositories->abstract }}
                            </textarea>
                            </div>

                            <div class="flex justify-center mx-auto items-center">
                                <button type="button"
                                    onclick="return ApproveUpdate('{{ $repositories->id }}','{{ $repositories->title }}','1')"
                                    class="flex justify-center  items-center gap-2 text-white mx-3 shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-5 px-16 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approve
                                    <i class="fa-solid fa-square-check md:ml-5"></i>
                                </button>
                                <button type="button"
                                    onclick="return ApproveUpdate('{{ $repositories->id }}','{{ $repositories->title }}','0')"
                                    type="submit"
                                    class="flex justify-center items-center gap-2 text-white mx-3 shadow-lg bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-5 px-16 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Denied
                                    <i class="fa-solid fa-ban md:ml-5"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    <div class="w-full absolute bottom-0">
        @include('components.footer')
    </div>    
</x-landing-layout>
<script>
    const ApproveUpdate = async (id, title, status) => {
        let tanya = confirm(`Realisasikan buku ${title}?`);

        if (tanya) {
            const csrftoken = $('meta[name="csrf-token"]').attr('content');
            console.log(status);
            try {
                const response = await axios.post(`/approverepo/${id}`, {
                    '_method': 'PATCH',
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    status: status
                });

                // Handle success
                console.log(response);

                // Update DOM or show a success message to the user
                alert('Data Repository telah diupdate');
                // Perform additional DOM manipulations if needed

            } catch (error) {
                // Handle error
                alert('Error updating record');
                console.log(error);
            }
        }
    };
</script>
</body>

</html>
