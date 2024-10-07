<x-landing-layout>
    <div class="container mx-auto my-8">
        <div>
            <div class="px-4 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-8">Edit Repository</p>
            </div>
            <section id="editrepo" class="px-4">
                <div class="container md:flex md:flex-row gap-6 mx-auto">

                    <div class=" w-full overflow-x-auto bg-white p-4 shadow-lg rounded-2xl">
                        <table class="table table-bordered" id="editrepo-datatables">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Type</th>
                                    <th>Jurusan</th>
                                    <th>Dosen Pembimbing</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Action</th>
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
                                <form method="POST" action="{{ route('editrepo.store') }}" id="formSourceModal">
                                    @csrf
                                    <div class="p-4 space-y-6">
                                        <div>
                                            <label for="text"
                                                class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                                            <input type="text" id="title" name="title"
                                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                id="" placeholder="Masukan Title...">
                                        </div>
                                        <div>
                                            <label for="type"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koleksi</label>
                                            <select id="type_id" name="type_id" data-placeholder="Pilih Jenis Koleksi"
                                                class="js-example-basic-single px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg">
                                                <option value="">Pilih Jenis Koleksi...</option>
                                                @foreach ($types as $t)
                                                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="text"
                                                class="block mb-2 text-esm font-medium text-gray-900">Jurusan</label>
                                            <input type="text" id="major" name="major"
                                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                id="" placeholder="Masukan Major...">
                                        </div>
                                        <div>
                                            <label for="koleksi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembimbing</label>
                                            <select id="lecturer" name="lecturer" data-placeholder="Pilih Pembimbing"
                                                class="js-example-basic-single px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg">
                                                <option value="">Pilih Pembimbing...</option>
                                                @foreach ($users as $u)
                                                    <option value="{{ $u->identity }}">{{ $u->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="text"
                                                class="block mb-2 text-esm font-medium text-gray-900">NIM</label>
                                            <input type="text" id="student" name="student"
                                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                id="" placeholder="Masukan Student...">
                                        </div>
                                        <div>
                                            <label for="text"
                                                class="block mb-2 text-esm font-medium text-gray-900">Nama
                                                Mahasiswa</label>
                                            <input type="text" id="student_name" name="student_name"
                                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                id="" placeholder="Masukan Nama Mahasiswa...">
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                                        <button type="submit" id="formSourceButton"
                                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500 text-white">Simpan</button>
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
</x-landing-layout>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        console.log('RUN!');


        $('#editrepo-datatables').DataTable({
            ajax: {
                url: '/api/editrepo',
                dataSrc: 'repositories'
            },
            columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return meta.row + 1;
                    }
                },
                {
                    data: 'title',
                    render: function(data, type, row) {
                        return '<div class="text-wrap">' + data + '</div>';
                    }
                },
                {
                    data: 'types',
                    render: function(data, type, row) {
                        return data.name;
                    }
                }, {
                    data: 'major',
                }, {
                    data: 'userlec',
                    render: function(data, type, row) {
                        // return data.userlec.name;
                        return data ? data.name : 'Tidak diketahui';
                    }
                }, {
                    data: 'student',
                }, {
                    data: 'student_name',
                }, {
                    data: {
                        no: 'no',
                        name: 'name'
                    },
                    render: (data) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                data-modal-target="sourceModal" data-title="${data.title}" data-type_id="${data.type_id}" data-major="${data.major}" data-lecturer="${data.lecturer}" data-student="${data.student}" data-student_name="${data.student_name}"
                                                onclick="editSourceModal(this)"
                                                class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                               Edit
                                            </button>`;
                        let deleteUrl =
                            `<button onclick="return repoDelete('${data.id}','${data.title}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i class="fas fa-trash"></i></button>`;
                        return `${editUrl} ${deleteUrl}`;
                    }
                },
            ],
        });
    });

    const editSourceModal = (button) => {
        const formModal = document.getElementById('formSourceModal');
        const modalTarget = button.dataset.modalTarget;
        const id = button.dataset.id;
        const title = button.dataset.title;
        const type_id = button.dataset.type_id;
        const major = button.dataset.major;
        const lecturer = button.dataset.lecturer;
        const student = button.dataset.student;
        const student_name = button.dataset.student_name;
        let url = "{{ route('editrepo.update', ':id') }}".replace(':id', id);
        let status = document.getElementById(modalTarget);
        document.getElementById('title_source').innerText = `Edit Repository ${name}`;
        document.getElementById('title').value = title;
        document.getElementById('type_id').value = type_id;
        document.getElementById('major').value = major;
        document.getElementById('lecturer').value = lecturer;
        document.getElementById('student').value = student;
        document.getElementById('student_name').value = student_name;
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

    const repoDelete = async (id, title) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus ${title} ${id}?`);
            if (tanya) {
                await axios.post(`/editrepo/${id}`, {
                        '_method': 'DELETE',
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    })
                    .then(function(response) {
                        // Handle success
                        location.reload();
                        // console.log(response)
                    })
                    .catch(function(error) {
                        // Handle error
                        alert('Error deleting record');
                        console.log(error);
                    });
            }
        }
</script>
