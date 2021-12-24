<div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
    <div class="flex flex-col space-y-6 md:h-full md:justify-between">
        <div class="flex justify-between">
            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                Aulas
            </span>
            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                Veja detalhes
            </span>
        </div>
        <div class="flex gap-2 md:gap-4 justify-between items-end">
            <div class="flex flex-col space-y-4">
                <h2 class="text-gray-800 font-bold tracking-widest leading-tight">Aulas comfirmadas</h2>
                <div class="flex items-center gap-4">
                    <p class="text-lg text-gray-600 tracking-wider">Hoje</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </div>
            <h2 class="text-lg md:text-xl xl:text-3xl text-gray-700 font-black tracking-wider">
                0
            </h2>
        </div>
        <div class="flex gap-2 md:gap-4">
            <a href="{{route('rooms.checkin')}}" class="bg-blue-600 px-5 py-3 w-full text-center md:w-auto rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-800">
                Ver todos
            </a>
        </div>
    </div>
</div>