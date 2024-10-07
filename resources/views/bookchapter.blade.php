<x-landing-layout>
    <div class="container mx-auto mt-8">
        <div>
            <div class="px-4 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-8">Book Chapter Dosen dan E-Book Dosen</p>
            </div>
            <section id="inputrepo" class="px-4">
                <div class="container mx-auto">
                    <div class="w-full mx-auto px-6 py-6 mb-10 shadow-lg bg-white rounded-2xl border">
                        <!-- <form action="{{ route('bookchapter.store') }}" method="post"> -->
                        <form onsubmit="uploadBerkas(event)" action="javascript:void(0)" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="grid gap-6 mb-6 md:grid-cols-3 mx-auto">
                                <div>
                                    <label for="jenis"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jenis</label>
                                    <select id="jenis" name="jenis" data-placeholder="Pilih Jenis"
                                        class="js-example-basic-single bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                                        data-allow-clear="false">
                                        <option value="">Pilih Jenis...</option>
                                        <option value="E-Book">E-Book
                                        </option>
                                        <option value="Book Capther Dosen">Book Capther Dosen</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="judul"
                                        class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                                    <input type="text" id="judul" name="judul"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Isi dengan Judul...">
                                </div>
                                <div>
                                    <label for="pengarang"
                                        class="block mb-2 text-sm font-medium text-gray-900">Pengarang</label>
                                    <input type="text" id="pengarang" name="pengarang"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Isi dengan Pengarang...">
                                </div>
                            </div>

                            <div class="grid gap-6 mb-6 md:grid-cols-3">
                                <div>
                                    <label for="tahun_terbit"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tahun Terbit</label>
                                    <input type="number" id="tahun_terbit" name="tahun_terbit"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Isi dengan Tahun Terbit...">
                                </div>
                                <div>
                                    <label for="penerbit"
                                        class="block mb-2 text-sm font-medium text-gray-900">Penerbit</label>
                                    <input type="text" id="penerbit" name="penerbit"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Isi dengan Penerbit...">
                                </div>
                                <div>
                                    <label for="tempat_terbit"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tempat Terbit</label>
                                    <input type="text" id="tempat_terbit" name="tempat_terbit"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Isi dengan Tempat Terbit...">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="isbn"
                                    class="block mb-2 text-sm font-medium text-gray-900">ISBN</label>
                                <input type="text" id="isbn" name="isbn"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Isi dengan ISBN...">
                            </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900"
                                        for="file_input">Upload file</label>
                                    <input
                                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                        aria-describedby="file_input_help" id="files" name="files"
                                        type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF
                                        (MAX. 10Mb).</p>
                                </div>
                            <div class="flex flex-row justify-center mt-6">
                                <button type="submit"
                                    class="text-white mx-auto shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-16 py-3 text-center">Upload
                                    <i class="fa-solid fa-upload ml-5"></i>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="w-full">
        @include('components.footer')
    </div>
    
    @push('scripts')
        <script>
            const uploadBerkas = async (event) => {
                event.preventDefault();

                let jenis = document.getElementById('jenis').value;
                let judul = document.getElementById('judul').value;
                let pengarang = document.getElementById('pengarang').value;
                let tahun_terbit = document.getElementById('tahun_terbit').value;
                let penerbit = document.getElementById('penerbit').value;
                let tempat_terbit = document.getElementById('tempat_terbit').value;
                let isbn = document.getElementById('isbn').value;
                let type_id = 'E';
                let file = document.getElementById('files');

                if (file.files.length > 0) {
                    let konfirmasi = confirm(`Apakah anda yakin akan mengunggah berkas ${file.files[0].name}`);
                    if (konfirmasi) {

                        const berkas = file.files[0];
                        const reader = new FileReader();
                        let data = {
                            file_name: `${judul.replace(/[\s~`!@#$%^&*(){}"']/g, '')}-${pengarang.replace(/[\s~`!@#$%^&*(){}"']/g, '')}-${type_id}-${jenis.replace(/[\s~`!@#$%^&*(){}"']/g, '')}`,
                            typefile: `${berkas.name.split('.').pop()}`,
                            judul: judul,
                            jenis: jenis,
                            pengarang: pengarang,
                            tahun_terbit: tahun_terbit,
                            penerbit: penerbit,
                            tempat_terbit: tempat_terbit,
                            isbn: isbn,
                            type_id: type_id,
                        }

                        const responseDatabase = await axios.post(`/bcebook`, data, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json', // Make sure to set the content type
                                // Any other headers you may need
                            }
                        });

                        console.log(responseDatabase);

                        try {
                            if (responseDatabase.data.book.id) {
                                reader.onload = async (event) => {
                                    let repository = {
                                        judul: judul.replace(/[\s~`!@#$%^&*(){}"']/g, ''),
                                        pengarang: pengarang.replace(/[\s~`!@#$%^&*(){}"']/g, ''),
                                        type_id: type_id,
                                        jenis: jenis.replace(/[\s~`!@#$%^&*(){}"']/g, ''),
                                        id: responseDatabase.data.book.id,
                                        typefile: berkas.name.split('.').pop(),
                                        file: event.target.result.split(';base64,').pop(),
                                    };

                                    console.log(repository);
                                    const responseUpload = await axios.post(
                                        `https://opac.politekniklp3i-tasikmalaya.ac.id:8444/upload-bcbook`,
                                        repository);
                                    alert(responseUpload.data.message);
                                    location.reload();
                                }
                            }

                            reader.readAsDataURL(berkas);
                        } catch (error) {

                            alert('MOHON MAAF SERVER SEDANG TIDAK TERSEDIA');
                            console.log(error);
                        }

                    }
                }
            };
        </script>
    @endpush
</x-landing-layout>

