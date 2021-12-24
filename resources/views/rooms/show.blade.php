<x-app-layout>


    <div class="flex flex-col space-y-8">
        <!-- First Row -->
        <div class="px-4 xl:p-0 gap-y-4 md:gap-6">
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
                        <p class="text-blue-600 text-sm font-bold">{{$room->start}}</p>
                        <div class="flex justify-around w-32">
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
                    </div>
                    <div class="flex justify-between">
                        <p class="text-blue-600 text-sm font-bold">Quantidade de Corfimados: {{count($room->presences)}}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-blue-600 text-sm font-bold">Maximo de alunos: {{$room->max_students}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 xl:p-0 gap-y-4 md:gap-6">
            <div class="w-full bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-sm text-gray-600 font-bold tracking-wide">Alunos confirmados</h2>
                </div>
                <div class="flex-col justify-center">
                    @foreach($presences as $presence)
                        <p class="font-bold">{{$presence->user->name}}</p> 
                    @endforeach
                    <br>
                    {{ $presences->links() }}
                    Exibindo {{ count($presences) }} resultados de {{ $presences->total() }} (de {{ $presences->firstItem() }} a {{ $presences->lastItem() }})
                </div>
            </div>
        </div>
    </div>


</x-app-layout>