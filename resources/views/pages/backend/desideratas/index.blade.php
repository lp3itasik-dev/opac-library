<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Desideratas') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl container mx-auto p-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">



            <div class="w-full text-slate-950 p-4 rounded-lg lg:bg-white shadow-xl md:bg-orange-500 bg-slate-500">
                @if (session('message'))
                    <div class="bg-green-200 text-green-800 p-4 my-4 rounded">
                        {{ session('message') }}
                    </div>
                @endif
                <h1 class="font-bold text-[20px]">Form Input Desideratas</h1>
                <div class="bg-white m-2 p-4 rounded-md">
                    <form action="{{ route('desideratas.store') }}" method="post">
                        @csrf
                        <label for="">
                            <span
                                class="block font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5 dark:text-white">Book</span>
                            <input type="text" name="book"
                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer"
                                id="" placeholder="Masukan Judul Buku...">
                            <span class="text-sm m-l text-red-500">{{ $errors->first('book') }}</span>
                        </label>
                        <label for="">
                            <span
                                class="block mt-4 font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5 dark:text-white">Author</span>
                            <input type="text" name="author"
                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer"
                                id="" placeholder="Masukan Pengarang Buku...">
                            <span class="text-sm m-l text-red-500">{{ $errors->first('author') }}</span>
                        </label>
                        <div>
                            <button type="submit"
                                class="bg-sky-400 h-10 w-28 mt-2 rounded-xl text-lime-50 hover:bg-sky-600 hover:shadow-sky-700 hover:shadow-md">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline text-white" height="16"
                                        width="14"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                    </svg> Simpan
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full text-slate-950 p-4 rounded-lg lg:bg-white shadow-xl md:bg-orange-500 bg-slate-500">
                <div class="relative overflow-x-auto">
                    <table class="table table-bordered" id="desideratas-datatables">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Book</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="sourceModal">
                <div class="fixed inset-0 bg-black opacity-50"></div>
                <div class="fixed inset-0 flex items-center justify-center">
                    <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                                Tambah Sumber Database
                            </h3>
                            <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                data-modal-hide="defaultModal">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('desideratas.store') }}" id="formSourceModal">
                            @csrf
                            <div class="p-4 space-y-6">
                                <div>
                                    <label for="text"
                                        class="block mb-2 text-sm font-medium text-gray-900">Book</label>
                                    <input type="text" id="book" name="book"
                                        class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                        id="" placeholder="Masukan Book...">
                                </div>
                                <div>
                                    <label for="text"
                                        class="block mb-2 text-sm font-medium text-gray-900">Author</label>
                                    <input type="text" id="author" name="author"
                                        class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                        id="" placeholder="Masukan Author...">
                                </div>
                            </div>
                            <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                                <button type="submit" id="formSourceButton"
                                    class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                                <button type="button" data-modal-target="sourceModal" onclick="changeSourceModal(this)"
                                    class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#desideratas-datatables').DataTable({
                ajax: {
                    url: 'api/desideratas',
                    dataSrc: 'desideratas'
                },
                columns: [{
                    data: 'no',
                    render: (data, book, row, meta) => {
                        return meta.row + 1;
                    }
                }, {
                    data: 'book'
                },{
                    data: 'author'
                }, {
                    data: {
                        no: 'no',
                        book: 'book',
                        author: 'author'
                    },
                    render: (data) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                        data-modal-target="sourceModal" data-book="${data.book}" data-author="${data.author}"
                                                        onclick="editSourceModal(this)"
                                                        class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                       Edit
                                                    </button>`;
                        let deleteUrl =
                            `<button onclick="return desideratasDelete('${data.id}','${data.book}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white">Delete</button>`;
                        return `${editUrl} ${deleteUrl}`;
                    }
                }, ],
            });
        });
        const desideratasDelete = async (id, book) => {
            let tanya = confirm(`Hapus ${book} jangan?`);
            if (tanya) {
                await axios.post(`/desideratas/${id}`, {
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
            const book = button.dataset.book;
            const author = button.dataset.author;
            let url = "{{ route('desideratas.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Edit Desideratas ${book}`;
            document.getElementById('book').value = book;
            document.getElementById('author').value = author;
            document.getElementById('formSourceButton').innerText = 'Simpan perubahan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
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
    </script>

</x-app-layout>
