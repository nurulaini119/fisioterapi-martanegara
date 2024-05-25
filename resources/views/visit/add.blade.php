<x-layout>
    <div class="flex flex-col gap-6 w-full bg-white h-full p-10 rounded-xl">
        <p class="text-xl font-bold">Tambah Data Kunjungan</p>
        <div class="flex flex-col gap-5 w-full md:flex-row">
            <div class="flex flex-col gap-2 w-full">
                <label for="name" class="text-gray-500">Pasien</label>
                <input type="text" name="name" id="name" class="bg-gray-100  h-14 rounded-xl p-3 focus-visible:border-royal-blue-500" placeholder="Pilih Nama">
            </div>
            <div class="flex flex-col gap-2 w-full">
                <label for="date" class="text-gray-500">Tanggal Kunjungan</label>
                <input type="text" name="date" id="date" class="bg-gray-100  h-14 rounded-xl p-3 focus-visible:border-royal-blue-500" placeholder="Pilih Tanggal">
            </div>
        </div>
        <div class="flex flex-col gap-5 w-full lg:flex-row">
            <div class="flex flex-col gap-2 w-full">
                <label for="chief-complaint" class="text-gray-500">Keluhan</label>
                <textarea name="chief-complaint" id="chief-complaint" cols="30" rows="10" class="bg-gray-100 h-40 rounded-xl p-3" placeholder="Masukan Keluhan Pasien"></textarea>
            </div>
            <div class="flex flex-col gap-2 w-full">
                <label for="treatment" class="text-gray-500">Penanganan</label>
                <textarea name="treatment" id="treatment" cols="30" rows="10" class="bg-gray-100 h-40 rounded-xl p-3" placeholder="Masukan Keluhan Pasien"></textarea>
            </div>
        </div>
        <div class="flex flex-col gap-2 w-full">
            <label for="physiotherapist" class="text-gray-500">Fisioterapis</label>
            <input type="text" name="physiotherapist" id="physiotherapist" class="bg-gray-100  h-14 rounded-xl p-3 focus-visible:border-royal-blue-500" placeholder="Pilih Fisioterapis">
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="image" class="text-gray-500">Foto Pendukung</label>
            <div class="flex bg-gray-100 rounded-lg p-4 w-full h-full">
                <div class="flex flex-wrap gap-4 w-full relative">
                    <div class="min-h-72 w-64 relative">
                        <i class="fa-solid fa-circle-xmark text-3xl text-black absolute right-0 m-2 cursor-pointer"></i>
                        <img src="/assets/img-tes.jpeg" alt="" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="flex flex-grow min-h-72">
                        <label for="image" class="flex flex-col bg-transparent border-2 border-dashed border-gray-300 rounded-lg justify-center items-center w-full h-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fa-solid fa-cloud-arrow-up text-gray-500 text-3xl mb-3"></i>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 font-semibold">Klik untuk menambahkan Foto</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="image" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="document" class="text-gray-500">Dokumen Pendukung</label>
            <div class="flex bg-gray-100 rounded-lg p-4 w-full h-full">
                <div class="flex flex-wrap gap-4 w-full relative">
                    <div class="min-h-72 w-64 relative">
                        <i class="fa-solid fa-circle-xmark text-3xl text-black absolute right-0 m-2 cursor-pointer"></i>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <embed src="/assets/latsol-tes.pdf" type="application/pdf" class="h-64 w-full">
                            <div class="px-6 py-4">
                              <p class="text-gray-700 text-base">
                                latsol-tes.pdf
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-grow min-h-72">
                        <label for="document" class="flex flex-col bg-transparent border-2 border-dashed border-gray-300 rounded-lg justify-center items-center w-full h-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fa-solid fa-file-circle-plus text-gray-500 text-3xl mb-3"></i>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 font-semibold">Klik untuk menambahkan Dokumen</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="document" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="referral-letter" class="text-gray-500">Surat rujukan</label>
            <div class="flex bg-gray-100 rounded-lg p-4 w-full h-full">
                <div class="flex flex-wrap gap-4 w-full relative">
                    {{-- <div class="min-h-72 w-64 relative">
                        <i class="fa-solid fa-circle-xmark text-3xl text-black absolute right-0 m-2 cursor-pointer"></i>
                        <img src="/assets/img-tes.jpeg" alt="" class="w-full h-full object-cover rounded-lg">
                    </div> --}}
                    <div class="flex flex-grow min-h-72">
                        <label for="referral-letter" class="flex flex-col bg-transparent border-2 border-dashed border-gray-300 rounded-lg justify-center items-center w-full h-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fa-solid fa-cloud-arrow-up text-gray-500 text-3xl mb-3"></i>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 font-semibold">Klik untuk menambahkan Foto</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="referral-letter" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-grow"></div>
        <div class="flex gap-4 justify-end w-full">
            <div class="flex justify-center items-center bg-transparent border border-royal-blue-500 text-royal-blue-500 p-2 h-12 w-24 rounded-lg hover:bg-royal-blue-500 hover:text-white">
                <a href="/visit">Batal</a>
            </div>
            <div class="flex justify-center items-center text-white p-2 h-12 w-24 rounded-lg bg-royal-blue-500 hover:bg-royal-blue-700">
                <a href="">Simpan</a>
            </div>
        </div>
    </div>
</x-layout>
