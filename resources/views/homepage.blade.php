<x-layout>
    <div class="flex flex-col gap-5 w-full">
        <div class="flex w-full h-36 rounded-3xl p-5 bg-royal-blue-500">
            <div class="flex-initial w-80">
                <img src="/assets/doctors.svg" alt="" class="absolute w-80 h-auto left-36" style="top: 6.25rem">
            </div>
            <div class="flex flex-col flex-grow gap-0.5 justify-center">
                <p class="text-4xl font-bold text-white">Fisioterapi Martanegara</p>
                <p class="text-m font-light text-white">Semoga harimu menyenangkan di tempat kerja.</p>
            </div>
        </div>
        <div class="flex flex-col w-full">
            <div class="flex items-center justify-between w-full">
                <p class="text-xl font-bold">Laporan</p>
                <div class="flex items-center gap-2">
                    <p class="text-gray-500">Bulan ini</p>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>
            <div class="flex flex-row w-full gap-5 mt-3">
                <div class="flex flex-1 gap-2 items-center bg-white h-20 w-full rounded-2xl p-5">
                    <div class="bg-turquoise-blue-300 p-3 rounded-lg w-16 text-center">
                        <i class="fa-solid fa-hospital-user text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">Pasien</p>
                        <p class="text-3xl font-bold">32</p>
                    </div>
                </div>
                <div class="flex flex-1 gap-2 items-center bg-white h-20 w-full rounded-2xl p-5">
                    <div class="bg-royal-blue-500 p-3 rounded-lg w-16 text-center">
                        <i class="fa-solid fa-book-medical text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">Kunjungan</p>
                        <p class="text-3xl font-bold">32</p>
                    </div>
                </div>
                <div class="flex flex-1 gap-2 items-center bg-white h-20 w-full rounded-2xl p-5">
                    <div class="bg-cranberry-500 p-3 rounded-lg w-16 text-center">
                        <i class="fa-solid fa-user-nurse text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">Penanganan</p>
                        <p class="text-3xl font-bold">32</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="flex w-full bg-white rounded-2xl h-full p-3 justify-center">
                Januari
            </div>
        </div>
    </div>
</x-layout>
