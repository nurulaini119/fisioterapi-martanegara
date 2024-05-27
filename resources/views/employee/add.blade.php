<x-layout>
    <div class="flex flex-col gap-6 w-full bg-white h-full p-10 rounded-xl">
        <p class="text-xl font-bold">Tambah Data Karyawan</p>
        <div class="flex flex-col gap-2 w-full">
            <label for="name" class="text-gray-500">Nama</label>
            <input type="text" name="name" id="name" class="bg-gray-100  h-14 rounded-xl p-3 focus-visible:border-royal-blue-500" placeholder="Masukan Nama">
        </div>
        <div class="flex flex-col gap-2 w-full">
            <label for="nik" class="text-gray-500">NIK</label>
            <input type="text" name="nik" id="nik" class="bg-gray-100  h-14 rounded-xl p-3" placeholder="Masukan NIK">
        </div>
        <div class="flex-grow"></div>
        <div class="flex gap-4 justify-end w-full">
            <div class="flex justify-center items-center bg-transparent border border-royal-blue-500 text-royal-blue-500 p-2 h-12 w-24 rounded-lg hover:bg-royal-blue-500 hover:text-white">
                <a href="/patient">Batal</a>
            </div>
            <div class="flex justify-center items-center text-white p-2 h-12 w-24 rounded-lg bg-royal-blue-500 hover:bg-royal-blue-700">
                <a href="">Simpan</a>
            </div>
        </div>
    </div>
</x-layout>
