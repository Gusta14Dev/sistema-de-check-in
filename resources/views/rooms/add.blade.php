<x-app-layout>

    <div class="flex flex-col space-y-8">
        <div class="px-4 xl:p-0 gap-y-4 md:gap-6">
            <div class="w-full bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-sm text-gray-600 font-bold tracking-wide">Cadastrar nova aula</h2>
                </div>
                <div class="flex-col justify-center">
                    <form action="{{route('store.room')}}" method="post">
                        <div class="mb-6">
                            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Nome da aula</label>
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Aula de karatê" required="">
                        </div>
                        <div class="mb-6">
                            <label for="teacher" class="text-sm font-medium text-gray-900 block mb-2">Professor</label>
                            <input type="text" id="teacher" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Paulo Vieira" required="">
                        </div>
                        <div class="mb-6">
                            <label for="max-students" class="text-sm font-medium text-gray-900 block mb-2">Maximo de alunos</label>
                            <input type="number" id="max-students" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="20" required="">
                        </div>
                        <div class="mb-6 flex">
                            <div x-data x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K'});" x-ref="datetimewidget" class="flatpickr container mx-auto col-span-6 sm:col-span-6 mt-5">
                                <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mb-1">Data e hora do inicio da aula</label>
                                <div class="flex align-middle align-content-center">
                                    <input x-ref="datetime" type="text" id="datetime" data-input placeholder="Select.." class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                                    <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r" title="clear" data-clear>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20" fill="#c53030">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-col w-full">
                                <label for="max-students" class="text-sm font-medium text-gray-900 block mb-2">Data e hora do final da aula</label>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
</x-app-layout>