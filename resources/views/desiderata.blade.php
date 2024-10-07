<x-landing-layout>
    <div class="container px-4 mx-auto">
        <div>
            <div class="px-4 pt-10 text-center items-center mb-8">
                <p class="font-bold text-black text-xl md:text-2xl">Pengajuan Buku</p>
            </div>

            <div class="w-full px-4 mb-10 bg-white shadow-lg rounded-2xl">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                    <table id="coba-datatable"
                        class="table table-bordered w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="font-bold text-lg px-6 py-3">
                                    Judul Buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($desiderata as $d)
                                <tr class="book-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                    data-title="{{ strtolower($d->book) }}">
                                    <th scope="row"
                                        class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                                        {{ $d->book }}
                                        <div class="flex">
                                            <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                                <i class="fa-solid fa-user"></i>
                                                {{ $d->author }}
                                            </h2>
                                        </div>
                                    </th>

                                    <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                        <a onclick="return desiderataUpdate('{{ $d->id }}','{{ $d->book }}')"
                                            href="#"
                                            class="bg-green-400 hover:bg-green-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Realisasi</a>
                                        <a onclick="return desiderataDelete('{{ $d->id }}','{{ $d->book }}')"
                                            href="#"
                                            class="bg-red-400 hover:bg-red-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full absolute bottom-0">
        @include('components.footer')
    </div>
</x-landing-layout>

<script>
    $(document).ready(function() {
        $('#coba-datatable').DataTable();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("table-search");
        const bookRows = document.querySelectorAll(".book-row");

        searchInput.addEventListener("input", function() {
            const searchTerm = searchInput.value.toLowerCase();

            bookRows.forEach(function(row) {
                const bookTitle = row.dataset.title.toLowerCase();
                if (bookTitle.includes(searchTerm)) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });
        });

        // Optional: Handle pagination links
        const paginationLinks = document.querySelectorAll('.pagination a');

        paginationLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Use AJAX to fetch the next page of data and update the table
                // You can make a new AJAX request to the server endpoint that returns paginated data
            });
        });
    });
</script>
<script>
    const desiderataDelete = async (id, book) => {
        let check = $('meta[name="csrf-token"]').attr('content');
        let tanya = confirm(`Apakah anda yakin untuk menghapus Buku ${book} ?`);
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

    const desiderataUpdate = async (id, book) => {
        let tanya = confirm(`Realisasikan buku ${book}?`);
        if (tanya) {
            const csrftoken = $('meta[name="csrf-token"]').attr('content');
            await axios.post(`/desiderata/${id}`, {
                    '_method': 'PATCH',
                    '_token': $('meta[name="csrf-token"]').attr('content')
                })
                .then(function(response) {
                    // Handle success
                    // location.reload();
                    console.log(response);
                })
                .catch(function(error) {
                    // Handle error
                    alert('Error deleting record');
                    console.log(error);
                });
        }
        // try {
        //     const response = await axios({
        //         method: 'post',
        //         url: `/desideratas/${id}`,
        //         headers: {
        //             'X-CSRF-Token': csrfToken,
        //         },
        //         data: {
        //             '_method': 'PATCH',
        //         },
        //     });

        //     console.log(response);

        //     // Handle success
        //     // alert('Record updated successfully');
        //     // location.reload();
        // } catch (error) {
        //     // Handle error
        //     // alert('Error Ai Kamu ihhhh... Ada yang salah kata gw mahhhhh');
        //     console.error(error);
        // }

    };
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("table-search");
        const bookRows = document.querySelectorAll(".book-row");

        searchInput.addEventListener("input", function() {
            const searchTerm = searchInput.value.toLowerCase();

            bookRows.forEach(function(row) {
                const bookTitle = row.dataset.title.toLowerCase();
                if (bookTitle.includes(searchTerm)) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
</script>
