<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex">
        @include('layouts.navigation')
        <div class="bg-blue-50 flex-grow py-12 px-10">
            <div class="flex justify-between">
                <div>
                    <h4 class="text-sm font-bold text-blue-600">Olá {{ Auth::user()->name }},</h4>
                    <h1 class="text-4xl font-bold text-blue-900 mt-">Bem vindo ao Dashboard!</h1>
                </div>
                <div>
                    <div class="">
                    </div>
                </div>
            </div>
            <div>
                <div class="flex space-x-4">
                    <div class="flex items-end justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
                        <div>
                            <span class="text-sm font-semibold text-gray-400">Quantidade de Aulas</span>
                            <h1 class="text-2xl font-bold">0</h1>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-end justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
                        <div>
                            <span class="text-sm font-semibold text-gray-400">Quantidade de alunos</span>
                            <h1 class="text-2xl font-bold">0</h1>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-end justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
                        <div>
                            <span class="text-sm font-semibold text-gray-400">Quantidade de Check In</span>
                            <h1 class="text-2xl font-bold">0</h1>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-end justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
                        <div>
                            <span class="text-sm font-semibold text-gray-400">Check In cancelados</span>
                            <h1 class="text-2xl font-bold">0</h1>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex mt-10 justify-center">
                    <div>
                        <table class="min-w-full table-auto">
                            <thead class="justify-between">
                                <tr class="bg-blue-600">
                                    <th class="px-16 py-2">
                                        <span class="text-gray-300"></span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-blue-50">Img</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-blue-50">Name</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-blue-50">Barcode</span>
                                    </th>

                                    <th class="px-16 py-2">
                                        <span class="text-blue-50">Price</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-blue-50">Status</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-200">
                                <tr class="bg-white border-4 border-gray-200 text-center">
                                    <td class="px-16 py-2 flex flex-row items-center">
                                        <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/30.jpg" alt="" />
                                    </td>
                                    <td>
                                        <span class="text-center ml-2 font-semibold">Dean Lynch</span>
                                    </td>
                                    <td class="px-16 py-2">samsung</td>
                                    <td class="px-16 py-2">
                                        <span>05/06/2020</span>
                                    </td>
                                    <td class="px-16 py-2">
                                        <span>10:00</span>
                                    </td>

                                    <td class="px-16 py-2">
                                        <span class="text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-4 border-gray-200 text-center">
                                    <td class="px-16 py-2 flex flex-row items-center">
                                        <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/76.jpg" alt="" />
                                    </td>
                                    <td>
                                        <span class="text-center ml-2 font-semibold">Ralph Barnes</span>
                                    </td>
                                    <td class="px-16 py-2">Iphone 13</td>
                                    <td class="px-16 py-2">
                                        <span>05/06/2020</span>
                                    </td>
                                    <td class="px-16 py-2">
                                        <span>12:15</span>
                                    </td>

                                    <td class="px-16 py-2">
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="12" r="9" />
                                                <polyline points="12 7 12 12 15 15" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-4 border-gray-200 text-center">
                                    <td class="px-16 py-2 flex flex-row items-center">
                                        <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/38.jpg" alt="" />
                                    </td>
                                    <td>
                                        <span class="text-center ml-2 font-semibold">Brett Castillo</span>
                                    </td>
                                    <td class="px-16 py-2">Oppo mini</td>
                                    <td class="px-16 py-2">
                                        <span>05/06/2020</span>
                                    </td>
                                    <td class="px-16 py-2">
                                        <span>08:35</span>
                                    </td>

                                    <td class="px-16 py-2">
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <line x1="18" y1="6" x2="6" y2="18" />
                                                <line x1="6" y1="6" x2="18" y2="18" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div></div>
                <div></div>
            </div>
            <div></div>
            <div></div>
        </div>
    </div>
</body>

</html>