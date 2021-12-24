<x-app-layout>
    <x-slot name="dashboard">true</x-slot>
    <div class="flex flex-col space-y-8">
        @if(Auth::user()->isAdmin)
        <!-- First Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
            <x-students-today></x-students-today>
            <x-register-room></x-register-room>
        </div>
        <!-- End First Row -->
        <!-- Start Second Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
            <div class="bg-white p-6 rounded-xl border border-gray-50">
                <div class="flex justify-between items-start">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-600 tracking-wide">Quantidade de aulas</p>
                        <h3 class="mt-1 text-lg text-blue-500 font-bold">0</h3>
                        <span class="mt-4 text-xs text-gray-500">Ultima aula realizada: 22/03/2001</span>
                    </div>
                    <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">

                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-50">
                <div class="flex justify-between items-start">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-600 tracking-wide">Quantidade de alunos</p>
                        <h3 class="mt-1 text-lg text-green-500 font-bold">0</h3>
                        <span class="mt-4 text-xs text-gray-500">Ultimo aluno cadastrado: 22/03/2001</span>
                    </div>
                    <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">

                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-50">
                <div class="flex justify-between items-start">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-600 tracking-wide">Quantidade de Check In</p>
                        <h3 class="mt-1 text-lg text-yellow-500 font-bold">0</h3>
                        <span class="mt-4 text-xs text-gray-600">Ultimo Check In realizado: 22/03/2001</span>
                    </div>
                    <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">

                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-50">
                <div class="flex justify-between items-start">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-600 tracking-wide">Check In cancelados</p>
                        <h3 class="mt-1 text-lg text-red-500 font-bold">0</h3>
                        <span class="mt-4 text-xs text-gray-500">ultimo Chech In cancelado: 22/03/2001</span>
                    </div>
                    <div class="bg-red-500 p-2 md:p-1 xl:p-2 rounded-md">

                    </div>
                </div>
            </div>
        </div>
        <!-- End Second Row -->
        @else
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
            <x-rooms-today></x-rooms-today>
            <x-checkin-room></x-checkin-room>
        </div>
        @endif
        <!-- Start Third Row -->
        <div class="px-4 xl:p-0 gap-y-4 md:gap-6">
            <div class="w-full bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-sm text-gray-600 font-bold tracking-wide">@if(Auth::user()->isAdmin) Ultimas aulas cadastradas @else Aulas de hoje @endif</h2>
                    @if(Auth::user()->isAdmin)<a href="{{route('rooms')}}" class="px-4 py-2 text-xs bg-blue-100 text-blue-500 rounded uppercase tracking-wider font-semibold hover:bg-blue-300">Mais</a>@endif
                </div>
                <div class="flex-col justify-center">
                    @foreach($rooms as $room)
                    <div class="w-full flex justify-between shadow-md flex-wrap mb-5">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-700 w-full sm:w-2/5 flex justify-around items-center py-2 rounded-t-md sm:rounded-tr-none sm:rounded-l-md">
                            <div class="flex flex-col justify-around  items-center text-white">
                                <p class="font-bold">{{$room->name}}</p>
                                <p class="text-xs lg:text-base">Professor {{$room->teacher}}</p>
                            </div>
                            <svg width="100" height="112" viewBox="0 0 100 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.2613 111.818C26.9247 111.762 31.6144 111.688 36.2261 111.134C37.7277 111.285 40.3766 112.691 40.8218 110.478C41.2023 108.674 39.8721 107.121 40.4525 105.201C40.6827 100.684 41.3249 96.1 43.0827 91.9208C45.3561 91.385 48.2128 91.7552 50.7106 91.568C53.1504 91.3479 52.8701 89.2726 52.8377 87.3663C53.0058 82.3611 52.829 77.3177 54.1334 72.438C56.0613 62.5803 58.5444 52.8402 60.5016 42.9861C64.9887 38.6892 69.7461 34.6466 73.4295 29.5933C77.0371 25.3036 79.9539 20.4425 84.1735 16.6944C85.741 15.6176 85.6457 13.5208 87.541 12.7875C89.5856 11.1421 91.6725 9.57528 94.262 8.94159C96.1946 7.00655 98.8649 5.19417 99.48 2.47739C98.482 -2.67822 92.1364 1.39514 90.2013 4.07017C86.1726 7.75312 80.9352 8.95827 76.0713 10.2479C73.1687 12.6395 69.9851 14.8563 67.7196 17.8571C66.2582 21.1011 62.5364 21.6355 60.1898 23.9667C58.214 25.347 55.7337 25.8427 53.8049 27.6126C50.5939 32.1156 45.5083 34.579 41.5235 38.2844C40.082 39.8063 36.569 39.9237 36.3905 37.3203C36.104 34.6929 39.5158 34.296 41.0802 32.8876C45.7473 29.9099 50.2207 26.4554 54.102 22.5857C56.9002 21.1408 59.8768 20.1368 62.7773 18.9351C63.6896 16.6469 62.5287 14.5514 59.9688 14.2551C57.9681 13.9686 56.8516 16.3234 55.6495 17.5237C54.0185 19.1552 52.4463 17.7253 50.7148 18.5478C47.536 20.1128 44.0177 20.024 40.5706 20.2816C36.7502 22.6615 32.4137 23.6456 28.0132 24.1584C25.6423 24.6339 22.8045 23.3334 21.0213 25.4839C18.8224 26.9166 17.65 29.8189 15.2888 30.865C12.5722 30.691 12.6199 26.4032 11.3099 24.2883C10.6361 22.4567 9.80372 20.8216 7.6101 20.8724C4.41634 19.9241 0.547099 21.9319 0.160686 25.4264C-0.348443 27.6193 0.414156 29.6714 1.57813 31.5136C0.822119 33.3962 2.56019 35.9599 4.61522 35.6845C6.80009 36.4403 7.98061 38.6535 9.67705 40.1181C10.8458 44.8471 9.71317 49.9571 11.596 54.5762C12.446 58.1659 15.7534 60.2739 18.6041 62.2382C20.4091 63.6788 22.7898 64.8979 25.0682 64.2704C26.4316 63.1287 27.6674 61.8631 29.5909 61.913C31.4725 61.9698 34.2328 61.1827 33.9272 58.814C33.3242 57.0115 36.7639 55.8291 37.006 56.7809C37.0704 61.1188 37.2796 65.5643 36.996 69.8413C35.5879 71.9409 34.7178 74.2261 34.5942 76.769C34.3396 81.6056 34.608 86.509 34.8668 91.3553C35.1884 95.018 35.3153 98.7239 35.0842 102.386C34.1198 107.495 29.232 108.936 24.8021 109.918C23.7948 110.434 22.557 110.53 22.2613 111.818Z" fill="white" fill-opacity="0.5" />
                            </svg>
                        </div>
                        <div class="w-full sm:w-3/5 h-24 sm:h-auto rounded-b-md sm:rounded-r-md px-2 sm:px-8 py-4 flex flex-col justify-between text-xs sm:text-base shadow-inner">
                            <div class="flex justify-between items-center">
                                <p class="text-blue-600 text-sm font-bold">Começo: {{$room->start}}</p>

                                @if(Auth::user()->isAdmin)
                                <div class="flex justify-around w-32">
                                    <a href="{{route('room.show', $room->id)}}" class="border border-blue-600 hover:bg-blue-600 hover:text-white text-blue-600 w-6 h-6 rounded flex justify-center items-center mr-2 transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                        </svg>
                                    </a>
                                    <a href="{{route('edit.room', $room->id)}}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white text-yellow-500 w-6 h-6 rounded flex justify-center items-center mr-2 transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <form action="{{route('delete.room', $room->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="border border-red-600 hover:bg-red-600 hover:text-white text-red-600 w-6 h-6 rounded flex justify-center items-center mr-2 transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                @else
                                @if($room->getPresenceUserOfRoom(Auth::user()->id, $room->id))
                                @if(($room->start->diffInMinutes($now)) > 30)
                                <div class="flex justify-around w-36">
                                    <form action="{{route('checkIn', $room->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="border border-green-600 hover:bg-green-600 hover:text-white text-green-600 w-full h-10 sm:h-6 rounded flex justify-around items-center mr-2 transition-all">
                                            <span class="text-xs">Confirmar presença</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                @endif
                                @else
                                @if(($room->start->diffInMinutes($now)) > 30)
                                <div class="flex justify-around w-36">
                                    <form action="{{route('checkIn.cancel', $room->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="border border-red-600 hover:bg-red-600 hover:text-white text-red-600 w-full h-10 sm:h-6 rounded flex justify-around items-center mr-2 transition-all">
                                            <span class="text-xs">Cancelar presença</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                @endif
                                @endif
                                @endif
                            </div>
                            @if(Auth::user()->isAdmin)
                            <div class="flex justify-between">
                                <p class="text-blue-600 text-sm font-bold">Quantidade de Corfimados: {{count($room->presences)}}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-blue-600 text-sm font-bold">Maximo de alunos: {{$room->max_students}}</p>
                            </div>
                            @else
                            <div class="flex justify-between">
                                <p class="text-blue-600 text-sm font-bold">Termino: {{$room->final}}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-blue-600 text-sm font-bold">Vagas: {{($room->max_students - count($room->presences))}}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Third Row -->
    </div>
</x-app-layout>