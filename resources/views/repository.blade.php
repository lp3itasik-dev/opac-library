<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository</title>
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="mx-auto max-w-screen bg-center bg-no-repeat bg-[url('/img/pattern.svg')] bg-cover">
    {{-- Section Navbar Start --}}
    {{ view('components.navbar') }}
    {{-- Section Navbar End --}}


    {{-- Section Top Start --}}
    
    <div class="container px-4 mx-auto">
        <div>
            <div class="px-4 pt-10 text-center items-center mb-8">
                <p class="font-bold text-black text-xl md:text-2xl">Pengajuan Buku</p>
            </div>

            
            <div class="w-full px-4 mb-10 shadow-lg bg-white rounded-2xl">
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">

                <div class="flex flex-column p-4 sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                  <div>
                      
                  </div>
                  <label for="table-search" class="sr-only">Search</label>
                  <div class="relative">
                      <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                      </div>
                      <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Judul Buku...">
                  </div>
                </div>    
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                              <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                                FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                                <div class="flex">
                                    <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                      <i class="fa-solid fa-user"></i>
                                      Nabila Azzahra [202002084]
                                    </h2>
                                    <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                      <i class="fa-solid fa-user-tie"></i>
                                      Sopyan Sauri, S.Kom
                                    </h2>
                                    <h2 class="text-red-600 font-bold max-w-md text-sm">
                                      2023
                                    </h2>
                                </div>
                              </th>
                              
                              <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                  <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                  <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                    <i class="fa-solid fa-eye"></i>
                                  </a>
                              </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                          
                              <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                  <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                  <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                    <i class="fa-solid fa-eye"></i>
                                  </a>
                              </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr>

                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                              FACTORS INFLUENCING OFFICE ACCEPTANCE TOWARDS SMART HOME TECHNOLOGY
                              <div class="flex">
                                  <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                    <i class="fa-solid fa-user"></i>
                                    Nabila Azzahra [202002084]
                                  </h2>
                                  <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Sopyan Sauri, S.Kom
                                  </h2>
                                  <h2 class="text-red-600 font-bold max-w-md text-sm">
                                    2023
                                  </h2>
                              </div>
                            </th>
                            
                            <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                <a href="#" class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas Akhir</a>
                                <a href="#" class="bg-green-400 hover:bg-green-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                          </tr> 
                    </tbody>
                </table>
                <nav class="flex items-center mx-auto px-4 flex-column flex-wrap md:flex-row justify-between pt-4 mb-5" aria-label="Table navigation">
                  <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                  <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                      <li>
                          <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                      </li>
                      <li>
                          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                      </li>
                      <li>
                          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                      </li>
                      <li>
                          <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                      </li>
                      <li>
                          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                      </li>
                      <li>
                          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                      </li>
                      <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                      </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
    </div>
    

    {{-- Section Footer Start --}}
    {{ view('components.footer') }}
    {{-- Section Footer End --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
