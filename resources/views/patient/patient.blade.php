<x-layout>
    <div class="flex flex-col w-full">
        <div class="flex justify-between w-full">
            <div class="">
                <input type="text" class="w-96 h-14 rounded-lg p-5 focus:outline-none focus:border-none" placeholder="Search...">
            </div>
            <div class="flex gap-2">
                <div class="flex items-center bg-royal-blue-500 text-white py-3 px-10 rounded-lg font-semibold hover:bg-royal-blue-700">
                    <a href="/patient/add">Tambah</a>
                </div>
                <button type="button" class="bg-cranberry-500 text-white p-4 rounded-lg font-semibold hover:bg-cranberry-700" >Hapus</button>
            </div>
        </div>
        <div class="w-full mt-5 bg-white rounded-lg p-5 h-full">

            {{-- alert --}}
            {{-- <x-success-alert></x-success-alert> --}}

            {{-- table --}}
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="w-20 px-6 py-3 border-b text-left leading-4 text-royal-blue-500 tracking-wider">
                            <input type="checkbox" id="select-all" class="custom-checkbox form-checkbox h-5 w-5">
                        </th>
                        <th class="p-4 w-20">No</th>
                        <th class="w-80 p-4 border-b">Nama</th>
                        <th class="p-4 border-b">Nomor Telepon</th>
                        <th class="p-4 border-b">Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    <tr class="hover:bg-gray-50">
                        <th class="w-20 px-6 py-3 border-b text-left leading-4 text-royal-blue-500 tracking-wider">
                            <input type="checkbox" class="custom-checkbox form-checkbox h-5 w-5">
                        </th>
                        <td class="p-4 border-b">1</td>
                        <td class="p-4 border-b">Ariyani</td>
                        <td class="p-4 border-b">08979807757668</td>
                        <td class="flex p-4 border-b gap-3">
                            <button type="button" class="border border-spring-green-400 p-3 rounded-lg">
                                <i class="fa-solid fa-pen text-spring-green-400"></i>
                            </button>
                            <button type="button" class="border border-cranberry-500 p-3 rounded-lg">
                                <i class="fa-solid fa-trash-can text-cranberry-500"></i>
                            </button>
                            <button type="button" class="border border-rice-cake-400 p-3 rounded-lg">
                                <i class="fa-regular fa-eye text-rice-cake-400"></i>
                            </button>
                        </td>
                    </tr>
                </tbody> --}}
            </table>

            {{-- no data --}}
            <div class="flex flex-col gap-3 items-center mt-14">
                <img src="/assets/no-data.svg" alt="" class="w-40 h-auto">
                <p>Data belum tersedia</p>
            </div>

            {{-- no search --}}
            {{-- <div class="flex flex-col items-center mt-4">
                <img src="/assets/no-search.svg" alt="" class="w-40 h-auto">
                <p>Kata <b>"Narasumber"</b> tidak ditemukan</p>
            </div> --}}

            <div class="flex justify-between items-center mt-14 border-t border-gray-200">
                <div class="relative inline-block text-left">
                    <div>
                      <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        10
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    {{-- <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                      <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                          <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                      </div>
                    </div> --}}
                  </div>


                  <div class="flex items-center justify-between bg-white px-4 py-3 sm:px-6">
                    <div class="flex flex-1 justify-between sm:hidden">
                      <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                      <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                      <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                          <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                          </a>
                          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                          <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                          <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                          <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </nav>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>
