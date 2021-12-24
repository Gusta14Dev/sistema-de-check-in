<nav class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto">
    <div class="hidden lg:flex lg:justify-between lg:items-center max-w-5xl mx-auto">
        <a href="{{route('dashboard')}}" class="flex items-start gap-2 group mr-5">
            <div class="bg-blue-600 text-white p-2 rounded-md">
                <svg class="w-6 h-6" viewBox="0 0 227 254" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.0717 252.746C61.6477 252.62 72.2832 252.452 82.7418 251.204C86.1474 251.543 92.1546 254.715 93.1642 249.723C94.0271 245.656 91.0104 242.154 92.3267 237.824C92.8488 227.638 94.3051 217.3 98.2917 207.876C103.447 206.667 109.926 207.502 115.591 207.08C121.124 206.584 120.488 201.904 120.414 197.605C120.796 186.318 120.395 174.944 123.353 163.94C127.725 141.71 133.357 119.746 137.795 97.5237C147.971 87.8338 158.76 78.7175 167.114 67.3217C175.295 57.6483 181.91 46.6859 191.48 38.2338C195.034 35.8055 194.818 31.077 199.117 29.4233C203.753 25.7128 208.486 22.1795 214.359 20.7505C218.742 16.3868 224.797 12.2997 226.192 6.17315C223.929 -5.45319 209.538 3.73258 205.15 9.76501C196.013 18.0704 184.136 20.7881 173.105 23.6962C166.522 29.0896 159.302 34.0886 154.165 40.8557C150.85 48.1712 142.41 49.3763 137.088 54.6333C132.607 57.746 126.982 58.8639 122.608 62.8553C115.326 73.0098 103.793 78.565 94.7557 86.921C91.4865 90.353 83.5196 90.6178 83.1147 84.7468C82.465 78.8219 90.2025 77.9268 93.7503 74.7508C104.335 68.0358 114.48 60.2455 123.282 51.5191C129.628 48.2608 136.378 45.9965 142.956 43.2867C145.025 38.1266 142.392 33.4012 136.587 32.733C132.05 32.0868 129.518 37.3971 126.791 40.104C123.092 43.7831 119.527 40.5586 115.6 42.4133C108.391 45.9426 100.412 45.7422 92.5945 46.3232C83.9305 51.69 74.096 53.9094 64.1162 55.0657C58.7394 56.1381 52.3037 53.2052 48.2597 58.0548C43.2729 61.2857 40.614 67.8305 35.2592 70.1896C29.0984 69.7973 29.2064 60.1279 26.2356 55.3587C24.7076 51.2282 22.8198 47.5409 17.845 47.6555C10.602 45.517 1.82717 50.0447 0.950837 57.9252C-0.203793 62.8704 1.52567 67.498 4.16539 71.6522C2.45087 75.8976 6.39255 81.6791 11.0531 81.058C16.008 82.7624 18.6853 87.7535 22.5326 91.0562C25.1831 101.72 22.6145 113.244 26.8845 123.66C28.812 131.755 36.3128 136.509 42.7778 140.939C46.8713 144.188 52.2703 146.937 57.4374 145.522C60.5293 142.947 63.3321 140.093 67.6942 140.205C71.9614 140.334 78.2215 138.559 77.5284 133.217C76.1609 129.152 83.9616 126.486 84.5105 128.632C84.6567 138.414 85.131 148.44 84.4879 158.084C81.2947 162.819 79.3214 167.973 79.041 173.707C78.4637 184.614 79.0723 195.672 79.6592 206.601C80.3885 214.86 80.6763 223.217 80.1522 231.476C77.9652 242.997 66.8804 246.247 56.8339 248.462C54.5495 249.626 51.7424 249.84 51.0717 252.746V252.746Z" fill="white" stroke="white" stroke-width="1.17307" />
                </svg>
            </div>
            <p class="text-sm font-light uppercase">
                Escola de karatê
                <span class="text-base block font-bold tracking-widest">
                    Kyōryokuna kikku
                </span>
            </p>
        </a>
        <ul class="flex items-center space-x-4 text-sm font-semibold">
            <li><a href="{{route('dashboard')}}" class="px-2 xl:px-4 py-2 @isset($dashboard) text-white bg-blue-600 @else text-gray-600 hover:bg-gray-200 @endisset rounded-md">Dashboard</a></li>
            @if(Auth::user()->isAdmin)
            <li><a href="{{route('rooms')}}" class="px-2 xl:px-4 py-2 @isset($rooms) text-white bg-blue-600 @else text-gray-600 hover:bg-gray-200 @endisset rounded-md">Aulas</a></li>
            <li><a href="{{route('students')}}" class="px-2 xl:px-4 py-2 @isset($students) text-white bg-blue-600 @else text-gray-600 hover:bg-gray-200 @endisset rounded-md">Alunos</a></li>
            @endif
            @if(!Auth::user()->isAdmin)
            <li><a href="{{route('rooms.checkin')}}" class="px-2 xl:px-4 py-2 @isset($checkin) text-white bg-blue-600 @else text-gray-600 hover:bg-gray-200 @endisset rounded-md">Minhas aulas confirmadas</a></li>
            <li><a href="{{route('rooms.week')}}" class="px-2 xl:px-4 py-2 @isset($week) text-white bg-blue-600 @else text-gray-600 hover:bg-gray-200 @endisset rounded-md">Aulas da semana</a></li>
            @endif
        </ul>

        <ul class="flex items-center gap-6">
            <li>
                <a href="#" class="text-sm font-sans text-gray-800 font-semibold tracking-wider">
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-current text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </div>
                    </button>
                </form>

            </li>
        </ul>
    </div>
    <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
        <a href="#" class="flex items-start gap-2 group">
            <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="text-sm font-light uppercase">
                Dashboard
                <span class="text-base block font-bold tracking-widest">
                    Atom
                </span>
            </p>
        </a>
        <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
            <ul class="p-4">
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        My Account
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Transactions
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Cards
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Offers
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>