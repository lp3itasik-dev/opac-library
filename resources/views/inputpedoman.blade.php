    <x-landing-layout>
        <div id="loading" class="hidden top-0 bg-black w-full h-full min-h-screen bg-opacity-40 fixed z-40 flex justify-center items-center transition duration-150">
            <lottie-player src="{{ asset('animation/loading.json') }}" background="transparent" speed="1"
                style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-8"></lottie-player>
        </div>
        <div class="container mx-auto my-8">
            <div>
                <div class="px-4 text-center items-center">
                    <p class="font-bold text-black text-xl md:text-2xl mb-7">Input Pedoman</p>
                </div>
                <section id="inputrepo" class="px-4">
                    <div class="container md:flex md:flex-row gap-6 mx-auto">

                        <div class="w-full md:w-1/2 mx-auto px-6 py-6 mb-10 shadow-lg bg-white rounded-2xl border">
                            <form onsubmit="uploadBerkas(event)" id="uploadForm" action="javascript:void(0)" enctype="multipart/form-data"
                            method="POST">
                                @csrf
                                <div class="mb-5 font-bold text-lg ">
                                    <h1>Form Input Pedoman</h1>
                                </div>
                                <div class="mb-6">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="title">Title</label>
                                    <input class="block w-full text-sm p-2 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="title" name="title" type="text">
                                </div>
                                <div class="mb-6">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                    <input class="block w-full text-sm p-2 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="files" name="files" type="file">
                                </div>
                                    <button href="#" type="submit" onclick="uploadFile()"
                                        class="text-white mx-auto shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-6 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan
                                        <i class="fa-solid fa-floppy-disk ml-3"></i>
                                    </button>

                            </form>
                        </div>

                        <div class=" w-full md:w-1/2 overflow-x-auto bg-white p-4 shadow-lg rounded-2xl">
                            <table class="table table-bordered" id="pedoman-datatables">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>File Pedoman</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="fixed inset-0 items-center justify-center z-50 hidden" id="sourceModal">
                            <div class="fixed inset-0 bg-black opacity-50"></div>
                            <div class="fixed inset-0 flex items-center justify-center">
                                <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                                        <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                                            Tambah Sumber Database
                                        </h3>
                                        <button type="button" onclick="sourceModalClose(this)"
                                            data-modal-target="sourceModal"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                            data-modal-hide="defaultModal">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('types.store') }}" id="formSourceModal">
                                        @csrf
                                        <div class="p-4 space-y-6">
                                            <div>
                                                <label for="text"
                                                    class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                                                <input type="text" id="name" name="name"
                                                    class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                    id="" placeholder="Masukan Tipe...">
                                            </div>
                                        </div>
                                        <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                                            <button type="submit" id="formSourceButton"
                                                class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                                            <button type="button" data-modal-target="sourceModal"
                                                onclick="changeSourceModal(this)"
                                                class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                let timestamp = new Date();
                let title = document.getElementById('title').value;
                let file = document.getElementById('files');

                if (file.files.length > 0) {
                    let konfirmasi = confirm(`Apakah anda yakin akan mengunggah berkas ${file.files[0].name}`);
                    if (konfirmasi) {

                        const berkas = file.files[0];
                        const reader = new FileReader();
                        let data = {
                            title: title,
                            file_name: `${title.replace(/[\s~`!@#$%^&*(){}"']/g, '')}.${berkas.name.split('.').pop()}`,
                            typefile: `.${berkas.name.split('.').pop()}`,
                            title: title,
                        }

                        const responseDatabase = await axios.post(`/inputpedoman`, data, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json', // Make sure to set the content type
                                // Any other headers you may need
                            }
                        });
                        try {
                            if (responseDatabase.data.id) {
                                reader.onload = async (event) => {
                                    let repository = {
                                        title: title.replace(/[\s~`!@#$%^&*(){}"']/g, ''),
                                        typefile: berkas.name.split('.').pop(),
                                        file: event.target.result.split(';base64,').pop(),
                                    };

                                    const responseUpload = await axios.post(
                                        `https://opac.politekniklp3i-tasikmalaya.ac.id:8444/upload-pedoman`,
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
    <script src="{{ asset('js/lottie-player.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#pedoman-datatables').DataTable({
                ajax: {
                    url: 'api/pedoman',
                    dataSrc: 'pedoman'
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return meta.row + 1;
                    }
                }, {
                    data: 'title',
                } ],
            });
        });
        const typesDelete = async (id) => {
            let tanya = confirm('Leres bade dihapus?');
            if (tanya) {
                await axios.post(`/types/${id}`, {
                        '_method': 'DELETE',
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    })
                    .then(function(response) {
                        // Handle success
                        location.reload();
                    })
                    .catch(function(error) {
                        // Handle error
                        alert('Error deleting record');
                        console.log(error);
                    });
            }
        }

        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const name = button.dataset.name;
            let url = "{{ route('types.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Edit Type ${name}`;
            document.getElementById('name').value = name;
            document.getElementById('formSourceButton').innerText = 'Simpan perubahan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('name', '_token');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            status.classList.toggle('hidden');
        }

        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }

        
        // Loading File
        function uploadFile() {
            const fileInput = document.getElementById('fileInput');
            const uploadForm = document.getElementById('uploadForm');
            const loadingDiv = document.getElementById('loading');

            // Simulasi waktu upload (Anda bisa mengganti ini dengan logika upload sesungguhnya)
            loadingDiv.classList.remove('hidden');
            setTimeout(() => {
                // Logika selesai upload
                loadingDiv.classList.add('hidden');
                uploadForm.reset();
                alert('File uploaded success!');
            }, 6000); // Ganti angka 2000 dengan waktu upload yang sesuai
        }
    </script>
